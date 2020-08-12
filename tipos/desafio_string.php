<div class="titulo">Desafio String</div>

<?php

echo " 01) Avaliando os métodos da documentação da string, qual método que a posição do texto 'abc' na 
string '!AbcaBcabc' retorne 1 ?";

echo "<br>Resposta = o método é 'stripos' que não diferencia maiúsculas de minuscúlas<br>";

echo 'example : ' . stripos('!AbcaBcabc', 'abc');