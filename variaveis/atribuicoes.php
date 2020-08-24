<div class="titulo">Atribuições</div>

<?php

$number =  1;
$numberSum = 9;

$numberSum += $number;

var_dump( $numberSum );

echo '<br>';

# 
# ?? equivale ao || do javascript

$undefinedValue = null;
unset($undefinedValue);
$someValue = 99;

$result = $undefinedValue ?? $someValue;


var_dump($result);

