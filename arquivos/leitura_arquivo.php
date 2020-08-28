<div class="titulo">Leitura Arquivo</div>
<?php

$arquivo = fopen('teste.txt', 'r');
echo fread($arquivo, 10);
echo "<br>";
echo fread($arquivo, 10);
fclose($arquivo);

echo "<hr>";

$arquivo = fopen('teste.txt', 'r');
echo fread($arquivo, filesize('teste.txt') );
fclose($arquivo);


echo "<hr>";

$arquivo = fopen('teste.txt', 'r');
echo fgets($arquivo) . '<br>';
echo fgets($arquivo) . '<br>';
echo fgets($arquivo) . '<br>';
echo fgets($arquivo) . '<br>';
echo fgets($arquivo) . '<br>';
echo fgets($arquivo) . '<br>';



echo "<hr>";
$arquivo = fopen('teste.txt', 'r');

while(!feof($arquivo)){
    echo fgets($arquivo) . '<br>';
}

fclose($arquivo);


echo "<hr>";
$arquivo = fopen('teste.txt', 'r+');
echo fgets($arquivo) . '<br>';
fclose();