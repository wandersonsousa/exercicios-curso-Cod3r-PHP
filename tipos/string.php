<div class="titulo">Tipo String</div>

<?php

echo "I'm a String";
echo "<br>";

var_dump("Me Too");
echo "<br>";

#concantenação
echo "Nós também" . " somos strings";
echo "<br>";

echo "oi", "eu", "sou", "wanderson";
echo "<br>";

print("imprime igual o ECHO, parecido python lol");
echo "<br>";

echo "'Ok heheh'" . "\"oi \"";

# algumas funcoes
echo "<br>" . strtoupper('eu fui transformado em UpperCase dinamicamente');
echo "<br>" . strlen('length of that string');
echo "<br>" . addcslashes('wandersondDEASOUSAjm', '[A..Z][a..z]');
echo "<br>" . md5('wanderson');
echo "<br>" . similar_text('ab', 'ab');
echo "<br>" . str_word_count('wan de sousa almeida \n');
