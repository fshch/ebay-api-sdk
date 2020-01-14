<?php

namespace DTS\eBaySDK\Create\Trading;


use QL\QueryList;

class CreateTypeFiles extends CreateFiles
{
    private $content = [];

    const SPECIAL_STRING_TYPE = [
        'UUIDType',
        'ItemIDType',
        'DisputeIDType',
        'SKUType',
        'OrderIDType',
        'UserIDType',
        'anyURI',
        'BestOfferIDType',
        'duration',
        'MyMessagesExternalMessageIDType',
        'MyMessagesMessageIDType',
    ];

    const FILE_TAIL1 = '
    
    /**
     * @param array $values Optional properties and values to assign to the object.
     */
    public function __construct(array $values = [])
    {
        list($parentValues, $childValues) = self::getParentValues(self::$propertyTypes, $values);

        parent::__construct($parentValues);

        if (!array_key_exists(__CLASS__, self::$properties)) {
            self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class()], self::$propertyTypes);
        }

        if (!array_key_exists(__CLASS__, self::$xmlNamespaces)) {
            self::$xmlNamespaces[__CLASS__] = \'xmlns="urn:ebay:apis:eBLBaseComponents"\';
        }
        ';

    const FILE_TAIL2 = '
        $this->setValues(__CLASS__, $childValues);
    }
}';


    public function run()
    {
        // $index = array_search('ShipmentType',$this->types);
        // $this->types = array_slice($this->types,$index);
        $this->types = ['SiteDefaultsType'];
        foreach ($this->types as $type) {
            if ($this->isDeprecatedType($type)) {
                continue;
            }
            $this->content = [];
            $this->currentType = ucfirst($type);
            echo $type.PHP_EOL;
            $this->makeFile();
        }
    }

    protected function init()
    {
        parent::init();
        $this->types = array_values(array_diff($this->types,$this->enumTypes));
    }

    protected function makeFile()
    {
        $ql = QueryList::get(self::TYPES_BASE_URL.'/'.$this->currentType.'.html');
        if ($this->checkDeprecated($ql, $this->currentType)) {
            return;
        }

        $this->parseExtendClass($ql);

        $this->parseTypeFields($ql);

        $property = $this->makePropertyContent();

        $exStr = $this->getRequestEx();

        $fileContent = self::FILE_HEADER."Trading\\Types;\n\n".
            $property['property_comment'].
            "class ".$this->currentType." extends ".$this->content['extendClass']."\n{\n".
            $property['property'].
            self::FILE_TAIL1.
            $exStr.
            self::FILE_TAIL2;
        file_put_contents(self::TYPE_PATH.'/'.$this->currentType.'.php',$fileContent);
    }

    private function makePropertyContent()
    {
        $property = '';
        $propertyComment = "/**\r\n *";

        foreach ($this->content['fields']??[] as $field) {
            $commentType = $field['comment_type'];
            $actualType = $field['actual_type'];
            $propertyType = $actualType??$commentType;
            if (strpos($propertyType,'\\') === 0) {
                $propertyType = substr($propertyType,1);
            }
            if ($property) {
                $property .= ",\r\n";
            }
            $property .= "        '".
                $field['name'].
                "' => [\r\n            'type' => '" . $propertyType .
                "',\r\n            'repeatable' => " . ($field['is_repeatable'] ? 'true' : 'false') .
                ",\r\n            'attribute' => " . ($field['is_attribute'] ? 'true' : 'false') .
                ",\r\n            ".
                ($field['is_attribute'] ? "'attributeName'" : "'elementName'")." => '" .
                $field['name'] . "'\r\n        ]";

            if ($field['is_repeatable'] === true) {
                $commentType .= '[]';
            }
            $propertyComment .= "\r\n * @property " . $commentType . ' $' . $field['name'];
        }

        $propertyComment .= "\r\n */\r\n";

        $propertyHead = '    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [';

        $property = $propertyHead . "\r\n" . $property . "\r\n    ];";

        return ['property'=>$property,'property_comment'=>$propertyComment];
    }

    private function parseExtendClass(QueryList $ql)
    {
        $title = $ql->find('h1')->text();
        preg_match('/\(.*\)/',$title,$match);
        $extendClassName = trim($match[0]??'','() ');

        switch ($extendClassName) {
            case '':
                $extendClass = '\\DTS\\eBaySDK\\Types\\BaseType';
                break;
            case 'int':
                $extendClass = '\\DTS\\eBaySDK\\Types\\IntegerType';
                break;
            case 'string':
            case 'double':
            case 'base64Binary':
            case 'decimal':
                $extendClass = '\\DTS\\eBaySDK\\Types\\'.ucfirst($extendClassName).'Type';
                break;
            default:
                $extendClass = '\\DTS\\eBaySDK\\Trading\\Types\\'.ucfirst($extendClassName);
                break;
        }
        $this->content['extendClass'] = $extendClass;
    }

    private function parseTypeFields(QueryList $ql)
    {
        $rules = [
            'element' => ['.elementID','text'],//field
            'detail' => ['.elementDefn','text'],//field description
        ];
        
        $elements = $ql->rules($rules)->query()->getData()->toArray();

        foreach ($elements as $element) {
            if ($this->isDeprecatedField($element['detail'])) {
                continue;
            }
            $tmp = [];

            $tmp['name'] = trim(preg_replace('/\(.*$/', '', $element['element']));

            $typeName = $this->getFieldTypeName($element['element']);

            $tmp['comment_type'] = $this->getFieldCommentType($typeName);

            $tmp['actual_type'] = $this->getFieldActualType($typeName);

            $tmp['is_repeatable'] = $this->isFieldRepeatable($element['element'],$tmp['name']);

            $tmp['is_attribute'] = $this->isAttributeField($tmp['name'],$ql->getHtml());

            $this->content['fields'][] = $tmp;
        }
    }

    private function isDeprecatedField($detail)
    {
        return empty($detail)
            || strpos($detail, 'Not used by any call') !== false
            || strpos($detail,'field is deprecated') !== false
            || strpos($detail,'no longer available') !== false
            || strpos($detail,'no longer applicable') !== false;
    }

    private function getFieldTypeName($desc)
    {
        $type = substr($desc,strpos($desc,'('));
        $type = trim($type,'() ');
        $type = explode(' ', $type);
        if ($type[0] == 'see') {
            $type = $type[1];
        } else {
            $type = $type[0];
        }
        return $type;
    }

    private function getFieldCommentType($typeName)
    {
        if (strpos($typeName, 'Type') !== false) {
            if ($this->isEnumType($typeName)) {//枚举类型
                $type = '\DTS\eBaySDK\Trading\Enums\\'.ucfirst($typeName);
            } elseif (in_array($typeName,self::SPECIAL_STRING_TYPE,true)) {
                $type = 'string';
            } else {
                $type =  '\DTS\eBaySDK\Trading\Types\\'.ucfirst($typeName);
            }
        } elseif ($typeName == 'dateTime') {
            $type = '\DateTime';
        } elseif (in_array($typeName, ['int','long','decimal'],true)) {
            $type = 'integer';
        } elseif ($typeName == 'float') {
            $type = 'double';
        } elseif (in_array($typeName, ['anyURI','token','time','duration'],true)) {
            $type = 'string';
        }
        return $type ?? $typeName;
    }

    private function isEnumType($type)
    {
        return in_array($type,$this->enumTypes,true);
    }

    private function getFieldActualType($typeName)
    {
        $type = null;
        if (strpos($typeName, 'Type') !== false) {
            if ($this->isEnumType($typeName)) {
                $type = 'string';
            } elseif (in_array($typeName,self::SPECIAL_STRING_TYPE,true)) {
                $type = 'string';
            }
        }
        return $type;
    }

    private function isFieldRepeatable($desc, $field)
    {
        $repeatDesc = preg_replace('/^.*\[/','[',$desc);
        if (($field == 'CategoryID' && $this->currentType == 'CategoryItemSpecificsType')
            || ($field == 'eBayPictureURL' && $this->currentType == 'PictureURLsType')) {
            return true;
        }
        $match = [];
        $pattern = '/[\*0-9]+\]/';
        preg_match($pattern,$repeatDesc,$match);
        if ($match && (trim($match[0],']')>1 || trim($match[0],']')=='*')) {
            return true;
        }
        return false;
    }

    private function isAttributeField($field,$html)
    {
        $attributeTitlePos = stripos($html,'<h2>Attribute</h2>') ?:
            (stripos($html,'<h2>Attributes</h2>') ?: PHP_INT_MAX);
        $elementPos = strripos($html,'<div class="elementID">'."\n".$field.' (');

        return $elementPos>$attributeTitlePos;
    }

    private function getRequestEx()
    {
        $exStr = '';
        if (strpos($this->currentType,'RequestType') !== false
            && $this->currentType !== 'BotBlockRequestType'
            && $this->currentType !== 'AbstractRequestType') {
            $exStr = '
        if (!array_key_exists(__CLASS__, self::$requestXmlRootElementNames)) {
            self::$requestXmlRootElementNames[__CLASS__] = \''.(preg_replace('/Type$/','',$this->currentType)).'\';
        }
';
        }
        return $exStr;
    }

}