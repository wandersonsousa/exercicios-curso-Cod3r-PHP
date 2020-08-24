<div class="titulo">Desafio PI</div>

<?php

$pi = 3.14;
if( ($pi - pi() ) <= 0.001 ){
    echo "Praticamente iguais, diferença : ". ($pi - pi() );
}else{
    echo "Diferença muito grande não tolerada: " . ($pi - pi() ); 
}