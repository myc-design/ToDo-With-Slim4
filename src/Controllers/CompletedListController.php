<?php
namespace App\Controllers;
use App\Models\ToDoModel;
use Slim\Views\PhpRenderer;
use App\Abstracts\Controller;

class CompletedListController extends Controller
{
    private $model;
    private $renderer;

    public  function __construct(ToDoModel $model, PhpRenderer $renderer)
    {
     $this->model = $model;
     $this->renderer = $renderer;    
    }

    public function __invoke($request, $response, $args)
    {
        $toDos = $this->model->getCompletedToDos();
        $data = ['toDos'=>$toDos];

        return $this->renderer->render($response, "completed.php", $data); 
    }
}
