<?php
abstract class Pessoa{
    protected $nome;
    protected $cpf;


    public function __construct($nome,$cpf){
        $this->nome = $nome;
        $this->cpf = $cpf;
    }
    public function toString(){
        return "Nome: " .$this->nome."\nCPF: ".$this->cpf;
    }

}


?>