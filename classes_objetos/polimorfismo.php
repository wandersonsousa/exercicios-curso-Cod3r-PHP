<div class="titulo">Polimorfismo</div>

<?php

class Comida {
    public $peso;
    function __construct($peso){
        $this->peso = $peso;
    }
}

class Arroz extends Comida {

}

class Feijao extends Comida {

}

class Sorvete extends Comida {

}

class Pessoa {
    public $peso;

    function __construct($peso){
        $this->peso = $peso;
    }
    public function comer(Arroz $comida){
        $this->peso += $comida->peso;
    }
    public function balanca(){
        echo "Você está pesando {$this->peso}kg";
    }
}

$arrozChamuscado = new Arroz($peso = 5);
    
$wanderson = new Pessoa(65.0);
$wanderson->comer($arrozChamuscado);
  
$wanderson->balanca();