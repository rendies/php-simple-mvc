<?php

/**
 * starting session for whole system
 */
session_start();

/**
 * Define Require constant
 */
define('ROOT_PATH', __DIR__ . DIRECTORY_SEPARATOR);
define('APP', '/'. basename(__DIR__) . '/');

/**
 * Require Needed Config File
 */
require_once ROOT_PATH.DIRECTORY_SEPARATOR. 'view' . DIRECTORY_SEPARATOR .'View.php';
require_once ROOT_PATH.'config'.DIRECTORY_SEPARATOR.'template.php';
require_once ROOT_PATH.'config'.DIRECTORY_SEPARATOR.'database.php';
require_once ROOT_PATH.'config'.DIRECTORY_SEPARATOR.'main.php';

/**
 * Create Database Connection
 */

$conn = mysql_connect($database['server'], $database['user'], $database['pass']) or die();

$db = mysql_select_db($database['database']);

/**
 * Getting Url Parameter to get controller and method string
 * @var [type]
 */
$pageParameter = (isset($_GET['r']))? explode('/',$_GET['r']) : '';

$controller = (count($pageParameter) == 2)? ucwords($pageParameter[0]) : ucwords($main['controller']);

$method = (count($pageParameter) == 2)? $pageParameter[1] : $main['method'];

/**
 * Main Flow Program
 * 
 * when controller exist then execute it
 * else then show error message
 */
if (file_exists('controller'.DIRECTORY_SEPARATOR.$controller.'.php'))
{
	require_once 'controller'.DIRECTORY_SEPARATOR.$controller.'.php';
	
	$obj = new $controller;

	$content = $obj->$method();
	
} else {

	require_once 'controller'.DIRECTORY_SEPARATOR.'Error.php';

	$obj = new Error;

	$content = $obj->generate(404);

}

/**
 * Execute Main Template
 */
include $template['template'];

?>