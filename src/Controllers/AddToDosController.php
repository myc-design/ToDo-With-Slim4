<?php
namespace App\Controllers;
use App\Models\ToDoModel;
use Slim\Views\PhpRenderer;
use App\Abstracts\Controller;

class AddToDosController extends Controller
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
     $data = $request->getParsedBody();
     $addToList = $this->model->addToDos($data['title'], $data['description'], $data['completed']);
var_dump($addToList);
     return $response->withHeader('Location', '/');
        // return $this->renderer->render($response, "index.php", $data); 
    }
}
