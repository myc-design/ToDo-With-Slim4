<?php
declare(strict_types=1);

use Slim\App;
use Slim\Interfaces\RouteCollectorProxyInterface as Group;

return function (App $app) {
    $container = $app->getContainer();

    //Get all lists from todo database
    $app->get('/', 'ToDoHomeController');


    //Button click->post param in body request
    //Use this data to call the CompletedListController
    //Get completed lists from the db
    //Redirect to home page to call ToDoHomeController
    //use

    $app->get('/completed', 'CompletedListController');



    //Add to list when AddMoreStuff button clicked
    //Add form data to the db
    //redirect to home page to retrieve all the lists
    $app->post('/', 'AddToDosController');


};
