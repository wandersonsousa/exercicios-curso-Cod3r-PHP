<div class="titulo">Valor vs Referência</div>

<?php

//Atribuição por valor
$var = 'valor inicial';
$varValor = $var;

echo $varValor . '<br>';

$varValor = 'novo valor';

echo "$varValor $var <br>";


//Atribuição Referência

$variavelReferencia = &$var;

$var = 'Valor das duas váriaveis foram modificadas';
echo $variavelReferencia;