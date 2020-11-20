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
        $query = $this->db->prepare('SELECT * FROM `todos` WHERE completed="1"');
        $query->execute();
        return $query->fetchAll();
    }

    public function addToDos($title, $description):array
    {
        $query = $this->db->prepare('INSERT INTO `todos` (title, description, completed) VALUES (:title, :description, :completed);');
        $query->bindParam(':title', $title);
        $query->bindParam(':description', $description);
        $query->bindParam(':completed', $completed);
        $query->execute();
        return $query->fetchAll();
    }


}

?>