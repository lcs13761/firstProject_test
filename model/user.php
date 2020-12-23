<?php

namespace model;
require __DIR__ . "/../vendor/autoload.php";
use config\formt;


//var_dump($user->toArray());
class user {//classe do usario  com os paramentos recebidos do input na pagina
    
    public $nome;
    public $email;
    public $telefone;
    public $empresa;
    public $protudo;
    public $tipo;

    public function __construct($nome,$email,$telefone,$empresa,$protudo,$tipo)//metodos usado para pega os dados da da pagina e atribi a class
    {   
        $formt = new formt($nome);
        $nome = trim($nome);
        if($nome == "" || $email == "" || $telefone=="" || $empresa=="" || $protudo=="" || $tipo==""){
            
        }elseif(!$formt->str_test($nome))
        {  
            return false;
        }else{
            $this->nome = $nome;
            $this->email = $email;
            $this->telefone = $telefone;
            $this->empresa = $empresa;
            $this->protudo = $protudo;
            $this->tipo = $tipo;
        }
    }
    public function toArray(){
        $data = array_values(get_object_vars($this));
        for ($i=0; $i < sizeof($data); $i++) {
            $data[$i]= "'$data[$i]'";
            # code...
        }
        return $data;
    }//pega todos os dados publicos da class, e coloca em uma array com seus valores

    public function clear(){
        
    }
}