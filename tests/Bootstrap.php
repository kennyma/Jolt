<?php

declare(encoding='UTF-8');
namespace JoltTest;

require_once 'PHPUnit/Framework.php';
require_once 'TestCase.php';

$includePath = get_include_path();
$joltTestPath = dirname(__FILE__);
$joltPath = realpath($joltTestPath . '/../');

set_include_path(implode(PATH_SEPARATOR, array($includePath, $joltPath, $joltTestPath)));

define('DS', DIRECTORY_SEPARATOR, false);
define('DIRECTORY_TESTS', $joltTestPath, false);
define('DIRECTORY_APP', DIRECTORY_TESTS . DS . 'App', false);
define('DIRECTORY_CONTROLLERS', DIRECTORY_APP . DS . 'Controllers', false);
define('DIRECTORY_VIEWS', DIRECTORY_APP . DS . 'Views', false);

require_once 'Jolt/Exception.php';