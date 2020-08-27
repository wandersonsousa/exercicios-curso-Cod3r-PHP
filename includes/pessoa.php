<?php
namespace App\Classes;

abstract class Pessoa {
    public $nome, $idade, $profissao;

    public function __construct($nome, $idade, $profissao){
        $this->nome = $nome;
        $this->idade = $idade;
        $this->profissao = $profissao;
    }
}