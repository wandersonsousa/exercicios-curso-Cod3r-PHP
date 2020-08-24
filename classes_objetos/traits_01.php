<div class="titulo">Traits 01</div>

<?php

trait validacao {
    public $valorA = 'A';
    public function validarString($str){
        return isset($str) && $str !== '';
    }
}

trait validacaoMelhor {
    public $valorB = 'B';
    private $valorC = 'C';
    public function validarStringMelhor($str){
        return isset($str) && trim($str);
    }
    public function showC (){
        echo $this -> valorC;
    }
}

class Usuario {
    use validacao, validacaoMelhor;
}

$usuario = new Usuario();

var_dump($usuario -> validarStringMelhor(' ') );

echo '<br>';

$usuario -> showC();