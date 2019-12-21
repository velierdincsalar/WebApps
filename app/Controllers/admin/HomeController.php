<?php


namespace app\Controllers\Admin;


use app\Controllers\Controller;

use Jenssegers\Blade\Blade;
use Medoo\Medoo;
use app\Controllers\Database;
class HomeController extends Controller
{
    private static $database;
    public function __construct()
    {
        parent::__construct();
       self::$database=Database::getDatabase();
    }
    public function index(){


        $email =   self::$database->select("veli_1453users","*");
        return  parent::View('test.homepage', ['name' => 'John wefwefDoe','name2' => $email]);



    }
}



