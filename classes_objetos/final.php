<div class="titulo">Final</div>

<?php

abstract class Abstrata {
    abstract public function metodo1();
    final public function metodo2(){
        echo "Não vou mudar ! <br>";
    }
}


class Classe extends Abstrata {
    public function metodo1(){
        echo "Fala ai motherfucker";
    }
}


//Não pode ser extendida 
final class Unica {
    public function sayHello(){
        echo 'Hello';
    }
}

$objeto = new Unica();

$objeto -> sayHello();