<div class="titulo">Gerenciando Sessão</div>

<?php
session_id('6c20d3fc05f6960afed4fa982a505da9');
session_start();
echo session_id('6c20d3fc05f6960afed4fa982a505da9');

$contador = &$_SESSION['contador'];
$contador = $contador ? $contador + 1: 1;

echo '<br>'.$contador;

if($_SESSION['contador'] % 5 === 0){
    session_regenerate_id();
}

if($_SESSION['contador'] >= 15){
    session_destroy();
}