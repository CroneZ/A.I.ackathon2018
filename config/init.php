<?php
//Start Session
session_start();

//Config file
require_once 'config.php';

//Inclde Helper
//require_once'helpers/system_helper.php';

//autoloader
function __autoload($class_name){
	require_once 'lib/'.$class_name. '.php';
}
