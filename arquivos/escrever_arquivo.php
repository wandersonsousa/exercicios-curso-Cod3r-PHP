<div class="titulo">Escrever Arquivo</div>

<?php

// $arquivo = fopen('teste.txt', 'w');
// fwrite($arquivo, "Valor Inicial \n");

// fclose($arquivo);



$arquivo = fopen('teste.txt', 'ab');
fwrite($arquivo, "Adicionado sem criar novo documento \n");

fclose($arquivo);