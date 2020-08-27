<div class="titulo">Básico Sessão</div>


<?php

session_start();


print_r($_SESSION);

echo '<br>';


if( !$_SESSION['nome'] ){
    $_SESSION['nome'] = 'Gabriel';
}

if( !$_SESSION['email'] ){
    $_SESSION['email'] = 'wanderson@gmail.com';
}

?>


<p>
    <a href="sessao/basico_alterar.php">Alterar Sessão</a>
</p>