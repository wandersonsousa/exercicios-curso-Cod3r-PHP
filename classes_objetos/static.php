<div class="titulo">Membros Estáticos</div>

<?php

class A {
    public static $PI = 3.14;
    public $naoStatic = 'Váriavel de instancia';
    public static $static = 'Váriavel de classe (Estática)';

    public function mostrarA(){
        echo "Não estático $this->naoStatic <br>";
        echo "Estático ". self::$static ."<br>";
    }

    public static function mostrarStatica(){
        //não tem acesso ao THIS
        echo "<br> Estático : ". self::$static;
    }
}


// $objetoA = new A();

echo A::$PI;

A :: mostrarStatica();