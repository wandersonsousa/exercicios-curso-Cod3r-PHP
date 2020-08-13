<div class="titulo">Desafio Variáveis Variáveis</div>



<?php

$a = 'Nossa';
$Nossa = 'Eu';
$Eu = 'consegui';
$consegui = 'responder';
$responder = 'esse';
$esse = 'desafio';

$NOSSA = $a; //a
$EU = $$NOSSA;  //nossa
$CONSEGUI = $$EU; //eu
$RESPONDER = $$CONSEGUI; //consegui
$ESSE = $$RESPONDER; //responder
$DESAFIO = $$ESSE; // esse


echo "$NOSSA! {$EU} $CONSEGUI $RESPONDER $ESSE $DESAFIO.";

