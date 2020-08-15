<div class="titulo">Constantes</div>

<?php
define('MINHA_CONSTANTE', 1.1449219);
const NOME = "Wanderson";

echo NOME . '<br>';
echo MINHA_CONSTANTE . '<br>';



$variavelQualquer = 'QualquerValor';

// GERA ERRO
#const CONSTANTE_QUALQUER = $variavelQualquer;

#MAS COM DEFINE NÃO GERA
define('CONSTANTE_QUALQUER', $variavelQualquer);

echo CONSTANTE_QUALQUER . '<br>';

echo PHP_VERSION . '<br>';


echo __FILE__ . '<br>' . __LINE__;