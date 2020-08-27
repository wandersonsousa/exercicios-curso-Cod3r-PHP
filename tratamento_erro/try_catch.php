<div class="titulo">Try Catch</div>

<?php




try {
    echo intdiv(7, 0);
} catch (Error $e) {
    //var_dump($e);
}



try {
    throw new Exception('Um erro muito estranho <br>');
    echo intdiv(1, 0);
} catch (DivisionByZeroError $e) {
    echo "Divisão por zero <br>";
} catch (Throwable $th) {
    echo 'Erro encontrado : ' . $th->getMessage() . '<br>';
}