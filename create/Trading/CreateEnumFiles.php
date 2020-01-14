<?php

namespace DTS\eBaySDK\Create\Trading;


use function DTS\eBaySDK\hump2underline;
use QL\QueryList;

class CreateEnumFiles extends CreateFiles
{
    private $elements;

    public function run()
    {
        foreach ($this->enumTypes as $enumType) {
            if ($this->isDeprecatedType($enumType)) {
                continue;
            }
            $this->currentType = $enumType;
            $this->makeFile();
        }
    }

    /**
     * create enum type file
     */
    protected function makeFile()
    {
        $ql = QueryList::get(self::TYPES_BASE_URL.'/'.$this->currentType.'.html');

        if ($this->checkDeprecated($ql, $this->currentType)) {
            return;
        }
        $this->getEnumElements($ql);
        $fileContent = self::FILE_HEADER.
            "Trading\\Enums;\n\n".
            "use MyCLabs\\Enum\\Enum;\n\n".
            "class ".$this->currentType." extends Enum \n{\n".
            $this->makeEnumTypeClassContent()."\n}\n";

        file_put_contents(self::ENUM_PATH.'/'.$this->currentType.'.php',$fileContent,FILE_APPEND);
    }

    /**
     * using QueryList to crawl enum elements of current type
     * @param QueryList $ql
     */
    private function getEnumElements(QueryList $ql)
    {
        $elements = $ql->rules(['text' => ['.tdEnum:first-child','text']])->query()->getData()->toArray();
        $this->elements = $elements ? array_column($elements,'text') : [];
    }

    /**
     * create class content of current type
     * @return string
     */
    private function makeEnumTypeClassContent()
    {
        $content = '';
        foreach ($this->elements as $element) {
            $name = hump2underline($element);
            $content .= "    const C_".$name." = '".$element."';\n";
        }
        $content .= "
    /**
     * Just for test case,because when called outside class, get_parent_class() always return false,unless the function
     * and class is in the same file
     *
     * @return string
     */
    public static function getParentClass()
    {
        return get_parent_class();
    }\n";
        return $content;
    }
}