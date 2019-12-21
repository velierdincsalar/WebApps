<?php


namespace app\Controllers;


class ServiceController extends Controller
{
    private static $database;
    public function __construct()
    {
        parent::__construct();
        self::$database=Database::getDatabase();
    }
    public function index()
    {


        $email = self::$database->select("veli_1453users", "*");
        return parent::View('test.service', ['name' => 'John wefwefDoe', 'name2' => $email]);


    }
}