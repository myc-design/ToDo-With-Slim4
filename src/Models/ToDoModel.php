<?php
namespace App\Models;

class ToDoModel
{
    private $db;

    public function __construct(\PDO $db)
    {
        $this->db = $db; 
    }
    
    public function getAllToDos(): array
    {
        $query = $this->db->prepare('SELECT * FROM `toDos`');
        $query->execute();
        return $query->fetchAll();
    }
    
    public function getCompletedToDos():array
    {
        // $query = $this->db->prepare('SELECT * FROM `toDos` WHERE completed="1"');
        $query = $this->db->prepare('SELECT * FROM `toDos` WHERE completed="1"');
        $query->execute();
        return $query->fetchAll();
    }
    
}

?>