<?php

namespace DTS\eBaySDK\Create\Trading;


class CreateTestTypeFiles extends CreateFiles
{
    public function run()
    {
        foreach ($this->types as $type) {
            $this->currentType = $type;
            $this->makeFile();
        }
    }

    protected function init()
    {
        $this->getTypeFiles();
    }

    private function getTypeFiles()
    {
        $files = scandir(self::TYPE_PATH);
        unset($files[array_search('.',$files)],$files[array_search('..',$files)]);
        $this->types = array_map(function($a) {
            return str_replace('.php','',$a);
        }, $files);
    }

    protected function makeFile()
    {
        $fullClassName = '\\DTS\\eBaySDK\\Trading\\Types\\'.$this->currentType;
        $extendClass = get_parent_class(new $fullClassName());
        $content = "use DTS\\eBaySDK\Trading\Types\\$this->currentType;
use PHPUnit\Framework\TestCase;

class {$this->currentType}Test extends TestCase
{
    private \$obj;

    protected function setUp():void
    {
        \$this->obj = new {$this->currentType}();
    }

    public function testCanBeCreated()
    {
        \$this->assertInstanceOf('\\DTS\\eBaySDK\\Trading\\Types\\".$this->currentType."', \$this->obj);
    }

    public function testExtendsBaseType()
    {
        \$this->assertInstanceOf('".$extendClass."', \$this->obj);
    }
}";
        $fileContent = self::FILE_HEADER."Test\\Trading\\Types;\n\n".$content;
        file_put_contents(self::TEST_TYPE_PATH.'/'.$this->currentType.'Test.php',$fileContent);
    }
}