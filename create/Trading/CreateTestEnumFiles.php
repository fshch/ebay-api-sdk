<?php

namespace DTS\eBaySDK\Create\Trading;


class CreateTestEnumFiles extends CreateFiles
{
    private $enums;

    public function run()
    {
        foreach ($this->enums as $enum) {
            $this->currentType = $enum;
            $this->makeFile();
        }
    }

    protected function init()
    {
        $this->getEnumFiles();
    }

    private function getEnumFiles()
    {
        $files = scandir(self::ENUM_PATH);
        unset($files[array_search('.',$files)],$files[array_search('..',$files)]);
        $this->enums = array_map(function($a) {
            return str_replace('.php','',$a);
        }, $files);
    }

    protected function makeFile()
    {
        $enum = $this->currentType;
        $usingClassStr = 'use DTS\\eBaySDK\\Trading\\Enums\\'.$enum.";        
use PHPUnit\\Framework\\TestCase;
use function DTS\\eBaySDK\hump2underline;\n\n";

        $classContent = "class ".$enum."Test extends TestCase
{
    public function testHasMethod()
    {
        \$this->assertTrue(method_exists($enum::class,'getParentClass'));
    }

    /**
     * @depends testHasMethod
     */
    public function testParentClass()
    {
        \$this->assertEquals('MyCLabs\\Enum\\Enum',$enum::getParentClass());
    }

    /**
     * @depends testParentClass
     */
    public function testConstants()
    {
        \$values = $enum::values();
        foreach (\$values as \$value) {
            \$this->assertEquals('C_'.hump2underline(\$value),(new $enum(\$value))->getKey());
        }
    }
}";
        $fileContent = self::FILE_HEADER."Test\\Trading\\Enums;\n\n".$usingClassStr.$classContent;

        file_put_contents(self::TEST_ENUM_PATH.'/'.$enum.'Test.php',$fileContent);
    }

}