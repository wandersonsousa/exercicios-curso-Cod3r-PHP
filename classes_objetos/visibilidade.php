<div class="titulo">Visibilidade</div>
<?php

class Pessoa {
    public $publico = 'Publico';
    protected $protegido = 'Protegido';
    private $privado = 'Privado';   
    private $nome;

    function __construct( $nome ){
        $this->nome = $nome;
    }

    public function mostrarA() {
        echo "Classe {$this->nome} ) publico = {$this->publico}<br>";
        echo "Classe {$this->nome} ) protegido = {$this->protegido}<br>";
        echo "Classe {$this->nome} ) privado = {$this->privado}<br>";
    }

    private function naoMostrar(){
        echo "Não vou imprimir";
    }

}


class OtherPessoa extends Pessoa{
    public function showProtected(){
        echo $this->protegido;
    }
    public function showPrivate(){
        echo $this->privado;
    }
    public function showPublic(){
        echo $this->publico;
    }
}

interface myInterface {
    function showName();
}

class havePessoa extends Pessoa implements myInterface{
    private $nome;
    function __construct($nome){
        $this->nome = $nome;
    }
    public function showName(){
        echo "{$this->nome}<br>";
    }
}

$wanderson = new Pessoa('Wanderson');
$emerson = new OtherPessoa('Emerson');

$naldi = new havePessoa('Naldilene');
$naldi->showName();   