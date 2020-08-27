<?php 
    namespace contexto;
?>

<div class="titulo">Exemplo Básico</div>

<?php
echo __NAMESPACE__ . "<br>";
const constante1 = 123;
define('contexto\constante2', 2);

echo \contexto\constante1. "<br>";

define('outro_contexto\constante3', 456);

echo \outro_contexto\constante3."<br>";
echo __NAMESPACE__ . "<br>";


function soma($a, $b){
    return $a + $b;
}
echo \contexto\soma(1, 99). "<br>";
echo soma(1, 99). "<br>";

?>