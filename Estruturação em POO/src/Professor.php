<?php

require_once 'Pessoa.php';

class Professor extends Pessoa{
    private $siape;

    public function __construct($nome,$cpf,$siape){
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->siape = $siape;
    }

    public function toString(){
        return "Nome: " .$this->nome."<br>CPF: ".$this->cpf. "<br>Siape: ".$this->siape;
    }
}

?>