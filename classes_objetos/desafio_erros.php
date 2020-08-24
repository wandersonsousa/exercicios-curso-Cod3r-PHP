<div class="titulo">Desafio Erros</div>

<?php 


interface Template {
    function metodo1();
    public function metodo2($parametro);
}

abstract  class ClasseAbstrata implements Template {
    public function metodo3() {
        echo "Estou Funcionando !";
    }
}


class Classe extends ClasseAbstrata {
    function __construct($parametro){

    }
}


$exemplo = new Classe();

$exemplo . metodo3();