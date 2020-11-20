<?php
namespace App\Factories;

use App\Controllers\CompletedListController;
use Psr\Container\ContainerInterface;


class CompletedListControllerFactory
{
    public function __invoke(ContainerInterface $container): CompletedListController
    {
     $model = $container->get('ToDoModel');
        $renderer = $container->get('renderer');
        return new CompletedListController($model, $renderer);
    }
}