<?php


namespace app\Controllers;

use Jenssegers\Blade\Blade;

class Controller
{
    public $blade;
    public function __construct()
    {
        $this->blade = new Blade('views', 'cache');
    }
    public function View($viewPage,$viewData)
    {
        return $this->blade->make($viewPage, $viewData);
    }
}