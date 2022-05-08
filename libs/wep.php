<?php



$router->get('/asd', function() {
    return 'Hello World!';
});

$router->get('/admin/{s}/{u}', 'Admin.HomeController@index');
$router->get('/admin', 'Admin.HomeController@index');
$router->get('/install', 'InstallWepApps@index');
$router->get('/install/table', 'InstallWepApps@index2');
$router->get('/servis', 'ServiceController@index');

$router->ajaxp('/abotu', 'ImageController@index');