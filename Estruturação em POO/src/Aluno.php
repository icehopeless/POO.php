<?php
require_once 'Pessoa.php';

class Aluno extends Pessoa{
    private $ra;

    public function __construct($nome,$cpf,$ra){
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->ra = $ra;
    }

    public function toString(){
        return "Nome: " .$this->nome."<br>CPF: ".$this->cpf. "<br>RA: ".$this->ra;
    }
}


?>