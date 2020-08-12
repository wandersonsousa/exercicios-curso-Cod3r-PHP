<div class="titulo">Conversões de Tipos</div>

<?php

echo "<p>Int para float : </p>";
var_dump(  PHP_INT_MAX + 1);
echo "<br>";

var_dump(  1 + 1.0 );
echo "<br>";

var_dump(  (float) 4 );
echo "<br>";


echo "<p>Float para int : </p>";
#pode haver perda de dados) 

var_dump( (int) 2.8 );
echo "<br>";

var_dump( intval(1.5) );
echo "<br>";

var_dump( (int) round(1.5) );
echo "<br>";


echo "<p>Operações com strings : </p>";

var_dump( 3 + "3");

echo "<br>";

var_dump( 3 . "3");

echo "<br>";

var_dump( is_string("3" + 2) );

echo "<br>";

var_dump(1 + "cinco ");

echo "<br>";

var_dump(1 + "99 cinco");

echo "<br>";

var_dump(1 + "1.0");

echo "<br>";

var_dump(1 + "-15e10");
