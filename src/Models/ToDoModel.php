<?php
namespace App\Models;

class ToDoModel
{
    private $db;

    public function __construct(\PDO $db)
    {
        $this->db = $db; 
    }
    
    public function getUncompletedToDos(): array
    {
        $query = $this->db->prepare('SELECT * FROM `toDos`');
        $query->execute();
        return $query->fetchAll();
    }
    
    
}

?>