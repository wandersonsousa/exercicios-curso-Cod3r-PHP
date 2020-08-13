<div class="titulo">Desafio Equação</div>

<?php

    $fractionA = ( (6 * ( 3  + 2)) ** 2 ) / (3 * 2);
    


    $fractionB = ( ( (1 - 5) * (2 - 7) ) / 2 ) ** 2;

    $equationNumerator =  ($fractionA - $fractionB) ** 3;
    $equationDenominador =  10 ** 3;


    $equantionTotal = $equationNumerator / $equationDenominador;

    echo "<p>O resultado final é " . $equantionTotal . " .</p>";