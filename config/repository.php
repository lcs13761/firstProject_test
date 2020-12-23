<?php
namespace View;
use model\user;
use config\Connect;
class repository{

private $column = ["id", "nome", "email", "telefone","empresa", "protudo", "tipo", "created_at"];
    public function inset(user $user)
    {   
        
        try {   
        $columns = implode(",",array_diff($this->column, ["id", "created_at"]));
        $values =  implode(",",$user->toArray());
        $stmt = Connect::getInstance()->prepare("INSERT INTO ctuser ({$columns}) VALUES ({$values})");
        //$stmt->bindValue(":{$columns}",$values);
        $stmt->execute();
        $delet = Connect::getInstance()->prepare("DELETE FROM ctuser WHERE nome = '' ");
        $delet->execute();
        return $stmt;
        
    }catch (\PDOException $exception)
    {
        return $exception;
    }
}   
   
}