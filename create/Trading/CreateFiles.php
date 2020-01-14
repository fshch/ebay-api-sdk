<?php
/**
 * This file is used to create package files e.g. CodeType.php,Type.php,Test.php.
 * Currently only supporting Trading API
 */

namespace DTS\eBaySDK\Create\Trading;


use QL\QueryList;

abstract class CreateFiles
{
    const FILE_HEADER = '<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You\'ve been warned!
 */

namespace DTS\\eBaySDK\\';

    const BASE_URL = 'https://developer.ebay.com/Devzone/XML/docs/Reference/eBay';

    const TYPES_BASE_URL = self::BASE_URL.'/types';

    const TYPES_INDEX_URL = self::TYPES_BASE_URL.'/index.html';

    const ENUM_TYPES_INDEX_URL = self::BASE_URL.'/enumindex.html#EnumerationIndex';

    const ENUM_PATH = ROOT_PATH.'/src/Trading/Enums';

    const TEST_ENUM_PATH = ROOT_PATH.'/test/Trading/Enums';

    const TYPE_PATH = ROOT_PATH.'/src/Trading/Types';

    const TEST_TYPE_PATH = ROOT_PATH.'/test/Trading/Types';

    //list of all types in the page https://developer.ebay.com/Devzone/XML/docs/Reference/eBay/types/index.html
    protected $types;

    //list of enum type (non-repeating) in the page https://developer.ebay.com/Devzone/XML/docs/Reference/eBay/enumindex.html#EnumerationIndex
    protected $enumTypes;

    //list of type which has been deprecated
    protected $deprecatedTypes;

    //when looping types,the current type,please see subclass
    protected $currentType;

    public function __construct()
    {
        $this->init();
    }

    /**
     *
     */
    protected function init()
    {
        $this->getTypes();
        $this->getEnumTypes();
        $this->getRecordDeprecatedTypes();
    }

    /**
     * using QueryList to crawl trading api type list
     */
    protected function getTypes()
    {
        $ql = QueryList::get(self::TYPES_INDEX_URL);
        $types = $ql->find("a.nohi")->text();
        $types = explode("\n",$types);
        $types = array_filter($types,function ($a) {
            if (strlen(trim($a))<2) {
                return false;
            }
            return true;
        });
        $this->types = $types;
    }

    /**
     * using QueryList to crawl trading api enum type list
     */
    protected function getEnumTypes()
    {
        $ql = QueryList::get(self::ENUM_TYPES_INDEX_URL);
        $enumTypes = $ql->find("td[width=251]>a.nohi")->text();
        $enumTypes = explode("\n",$enumTypes);
        $enumTypes = array_values(array_unique($enumTypes));
        $this->enumTypes = $enumTypes;
    }

    /**
     * get deprecated types from record text
     */
    protected function getRecordDeprecatedTypes()
    {
        $content = file_get_contents(__DIR__ . '/deprecatedTypes.txt');
        $this->deprecatedTypes = $content ? explode(',',$content) : [];
    }

    /**
     * the type whether is deprecated
     * @param string $typeName type name
     * @return bool
     */
    protected function isDeprecatedType($typeName)
    {
        return in_array($typeName,$this->deprecatedTypes,true);
    }

    /**
     * add deprecated type to record file
     * @param string $typeName type name
     */
    protected function addToDeprecatedTypeList($typeName)
    {
        @file_put_contents(__DIR__ . '/deprecatedTypes.txt',','.$typeName,FILE_APPEND);
    }

    /**
     * check the type from its description whether is deprecated,if deprecated, add to record file
     * @param QueryList $ql
     * @param string $typeName
     * @return bool
     */
    protected function checkDeprecated(QueryList $ql, $typeName)
    {
        $content = $ql->find("p")->text();
        if (strpos($content,'type is deprecated') !== false
            || strpos($content,'No calls use '.$typeName) !== false) {
            $this->addToDeprecatedTypeList($typeName);
            return true;
        }
        return false;
    }

    /**
     *
     */
    abstract public function run();

    /**
     * create file
     */
    abstract protected function makeFile();
}