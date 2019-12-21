<?php
// If you installed via composer, just use this code to require autoloader on the top of your projects.
namespace app\Controllers;

use app\Controllers\CreateDatabase;
use app\Controllers\Users;


class InstallWepApps extends CreateDatabase
{
    public function index()
    {
        //parent:: __construct();
        parent::Install();
    }
    public function index2()
    {

        Users::Run();
    }
}