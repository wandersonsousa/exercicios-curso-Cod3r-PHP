<div class="titulo">Erros Personalizados</div>

<?php

class FaixaEtariaException extends Exception{
    public function __construct($message, $code = 0, $previous = null){
        parent::__construct($message, $code, $previous);
    }
}

function calcularAposentadoria( $idade ){
    if($idade < 18){
        throw new FaixaEtariaException('Ainda está muito longe');
    }
    if($idade > 70){
        throw new FaixaEtariaException('Já deveria estar aposentado');
    }

    return 70 - $idade;
}

$idadesAvalidas = [15, 30, 60, 80];

foreach($idadesAvalidas as $idade){

    try {
        $idadeRestante = calcularAposentadoria($idade);
        echo "Idade que falta para aposentadoria $idadeRestante <br>";
    }catch(FaixaEtariaException $ex){
        echo "Não foi póssivel calcular idade para aposentadoria -";
        echo "Motivo : {$ex ->getMessage()} <br>";
    }

}