<?php
namespace App\Factories;

use App\Controllers\ToDoHomeController;
use App\Models\ToDoModel;
use Psr\Container\ContainerInterface;


class ToDoHomeControllerFactory
{
    public function __invoke(ContainerInterface $container): ToDoHomeController
    {
     $model = $container->get('ToDoModel');
        $renderer = $container->get('renderer');
        return new ToDoHomeController($model, $renderer);
    }
}