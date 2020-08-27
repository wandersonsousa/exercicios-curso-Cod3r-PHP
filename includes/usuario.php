<?php
namespace App\RH;

require_once 'pessoa.php';



class Usuario extends \App\Classes\Pessoa{
    public $email, $senha;

    function __construct($nome, $idade, $profissao, $email, $senha){
        parent::__construct($nome, $idade, $profissao);
        $this->email = $email;
        $this->senha = $senha;
    }

    public function apresentar(){
        echo "Olá me chamo {$this->nome}, tenho {$this->idade} e trabalho de {$this->profissao}";
    }
}


