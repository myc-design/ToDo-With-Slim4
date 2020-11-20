<?php
namespace App\Controllers;
use App\Models\TodoModel;
use Slim\Views\PhpRenderer;
use App\Abstracts\Controller;

class ToDoHomeController extends Controller
{
    private $model;
    private $renderer;

    public  function __construct(TodoModel $model, PhpRenderer $renderer)
    {
     $this->model = $model;
     $this->renderer = $renderer;    
    }

    public function __invoke($request, $response, $args)
    {
        $toDos = $this->model->getUncompletedToDos();
        $data = ['toDos'=>$toDos];
        var_dump($data);
        return $this->renderer->render($response, "index.php", $data); 
    }
}
