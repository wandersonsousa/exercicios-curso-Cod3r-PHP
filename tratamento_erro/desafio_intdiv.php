<?php
namespace Desafio\Intdiv;

echo '<div class="titulo">Desafio Intdiv</div>';

class DivisionByZero extends \Exception {
    public function __construct($message = 'Divisão por zero encontrada', $code = 0, $previous = null){
        parent::__construct($message, $code, $previous);
    }
}
class ResultNotInt extends \Exception {
    public function __construct($message = 'Divisão com resultado não inteiro', $code = 0, $previous = null){
        parent::__construct($message, $code, $previous);
    }
}

function intdiv($numInt, $numInt2){
    if($numInt2 === 0) throw new DivisionByZero();
    if($numInt % $numInt2 !== 0) throw new ResultNotInt();
    
    return $numInt / $numInt2;
}




$denominadoresTeste = [2,3,0];
#sucesso
#falha
#falha
#sucesso

foreach($denominadoresTeste as $denominador){
    try {
        echo intdiv( 8, $denominador) .'<br>';
    } catch (\Throwable $th) {
        echo $th->getMessage() . '<br>';
    }
}

try {
    echo \intdiv(8, 3) .'<br>';
} catch (\Throwable $th) {
    echo $th->getMessage() . '<br>';
}

