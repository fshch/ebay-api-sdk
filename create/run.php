<?php

define('ROOT_PATH', __DIR__.'/..');

define('SRC_PATH',ROOT_PATH.'/src');

define('TEST_PATH',ROOT_PATH.'/test');

require ROOT_PATH.'/vendor/autoload.php';

$createFiles = new \DTS\eBaySDK\Create\Trading\CreateTestTypeFiles();

$createFiles->run();
