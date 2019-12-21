<?php

namespace app\Controllers;

use PDO;

use app\Controllers\Config;
class CreateDatabase extends Config
{
    private  $base_url;
    private  $host;
    private  $root;
    private  $root_password;
    private  $user;
    private  $pass;
    private  $db;

    public function __construct()
    {

        $this->base_url=parent::getBaseUrl();
        $this->host=parent::getHost();
        $this->root=parent::getRoot();
        $this->root_password=parent::getRoot_Password();
        $this->user=parent::getUser();
        $this->pass=parent::getPass();
        $this->db=parent::getDb();
    }
    public function Install()
    {
        try {
            $dbh = new PDO("mysql:host=$this->host",  $this->root,  $this->root_password);
            $dbh->exec("CREATE DATABASE `$this->db` CHARACTER SET utf8 COLLATE utf8_turkish_ci;
                CREATE USER '$this->user'@'localhost' IDENTIFIED BY '$this->pass';
                GRANT ALL ON `$this->db`.* TO '$this->user'@'localhost';
                FLUSH PRIVILEGES;")
            or die(print_r($dbh->errorInfo(), true));
        } catch (PDOException $e)
        {
            die("DB ERROR: ". $e->getMessage());
        }
    }
    public function Run()
    {

    }
}