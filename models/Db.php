<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 2019-05-02
 * Time: 16:30
 */

namespace models;
use \PDO;

class Db{

   public static function getConnect(){

       $paramsPath = ROOT . "/config/db_params.php";
       $params = include($paramsPath);

        $host = $params['host'];
        $user = $params['user'];
        $pass = $params['pass'];
        $database = $params['dbname'];





       try{

           $db = new PDO("mysql:host=$host;dbname=$database", $user, $pass, array(    // Наименование базы; Хост; Имя пользователя; Пароль.
               PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES UTF8",
               PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_OBJ,
               PDO::ATTR_ERRMODE=>TRUE
           ));
       }catch(PDOExeception $e){

           echo 'Подключение не удалось: ' . $e->getMessage();

       }


        return $db;

   }

}