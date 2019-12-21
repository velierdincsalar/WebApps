<?php
namespace app\Controllers;

class Config
{
    private static  $base_url="";
    private static  $host="localhost";
    private static  $root="root";
    private static  $root_password="";
    private static  $user='webapps';
    private static  $pass='14531071';
    private static  $db="veliwebapps";

    public  function  getBaseUrl() {
        return  self::$base_url;
    }
    public function getHost() {
        return  self::$host;
    }
    public function getRoot() {
        return  self::$root;
    }
    public function getRoot_Password() {
        return  self::$root_password;
    }
    public function getUser() {
        return  self::$user;
    }
    public function getPass() {
        return  self::$pass;
    }
    public function getDb() {
        return  self::$db;
    }
}