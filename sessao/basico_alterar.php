<?php

session_start();
print_r( $_SESSION );

?>

<p>
    <b>Nome: </b> <?= $_SESSION['nome'] ?>
</p>

<p>
    <b>Email: </b> <?= $_SESSION['email'] ?>
</p>

<?php
    $_SESSION['email'] = 'wandersonewemail@gmail.com'
?>

<p>
    <a href="../exercicio.php?dir=sessao&file=basico">Voltar</a>
    <a href="basico_apagar_limpar.php">Limpar</a>
</p>