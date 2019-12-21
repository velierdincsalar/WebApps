<?php

namespace app\Controllers;
use Medoo\Medoo;
use PDO;
use app\Controllers\Config;
class Database extends Config
{
    public  function  getDatabase()
    {
        return $database = new Medoo([
            // required
            'database_type' => 'mysql',
            'database_name' =>  parent::getDb(),
            'server' => parent::getHost(),
            'username' =>  parent::getUser(),
            'password' =>   parent::getPass(),

            // [optional]
            'charset' => 'utf8',
            'collation' => 'utf8_turkish_ci',
            'port' => 3306,

            // [optional] Table prefix
         //   'prefix' =>'veli_',

            // [optional] Enable logging (Logging is disabled by default for better performance)
            'logging' => true,

            // [optional] MySQL socket (shouldn't be used with server and port)
            'socket' => '/tmp/mysql.sock',

            'command' => ['SET SQL_MODE=ANSI_QUOTES']
        ]);
    }
}