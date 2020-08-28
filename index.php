<?php
session_start();
if( !isset($_SESSION['usuario']) && !isset($_COOKIE['usuario']) ){
    header('Location: login.php');
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Curso PHP</title>
</head>
<body>

    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Índice de Exercícios</h2>
    </header>
    <nav class="navegacao">
        <a href="index.php"> <?= $_SESSION['usuario']?> </a>
        <a href="logout.php" class="vermelho">Logout</a>
    </nav>
    <main class="principal">
        <div class="conteudo">

                <?php include_once 'menu.php'; ?>
                
        </div>
    </main>

    <footer class="rodape">
        Cod3r - wandersonsousa <?= date('Y');?>
    </footer>

    
</body>
</html>