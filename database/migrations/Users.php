<?php
namespace app\Controllers;
use app\Controllers\Database;
use Medoo\Medoo;
class Users extends Database
{
    private $database;
    public function __construct()
    {
        parent:: __construct();
        $this->database=parent::getDatabase();
    }
    public function Run()
    {

        parent::getDatabase()->create("Users", [
            "id" => [
                "INT",
                "NOT NULL",
                "AUTO_INCREMENT",
                "PRIMARY KEY"
            ],
            "userName" => [
                "VARCHAR(30)",
                "NOT NULL"
            ],
            "password" => [
                "VARCHAR(100)",
                "NOT NULL"
            ],
            "create_at" => [
                "TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP",
                "NOT NULL"
            ],
            "update_at" => [
                "TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP",
                "NOT NULL"
            ],
            "delete_at" => [
                "TIMESTAMP",
                "NOT NULL"
            ]
        ]);
    }

}