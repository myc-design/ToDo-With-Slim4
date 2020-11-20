<?php
namespace App\Factories;

use App\Controllers\AddToDosController;
use Psr\Container\ContainerInterface;


class AddToDosControllerFactory
{
    public function __invoke(ContainerInterface $container): AddToDosController
    {
     $model = $container->get('ToDoModel');
        $renderer = $container->get('renderer');
        return new AddToDosController($model, $renderer);
    }
}