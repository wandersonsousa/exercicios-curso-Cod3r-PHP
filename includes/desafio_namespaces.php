<?php
require_once 'usuario.php';

$emerson = new \App\RH\Usuario('Emerson', 14, 'Estudante', 'emerson@gmail.com', '12345');


$emerson->apresentar();