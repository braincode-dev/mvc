<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 2019-05-01
 * Time: 22:47
 */

// Settings

ini_set('display_errors', 1);
error_reporting(E_ERROR | E_WARNING | E_PARSE);

// Include files system

define('ROOT', dirname(__FILE__));
require_once ROOT."/components/Router.php";
require_once ROOT . "/models/Db.php";

// Include DataBase



// Call routers

$router = new Router;
$router->run();