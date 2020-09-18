<?php
session_start();
require_once 'db_connection.php';

$db_config = [
    'host' => 'localhost',
    'user' => 'root',
    'password' => '',
    'port' => '3306',
    'databaseName' => 'curso_php'
];
$database = new PDO_Connect();
$database->setDatabaseConfig($db_config);
$database->makeConnection();

function getUsersFromDb($conn) {
    $getUsers = $conn->prepare("SELECT * FROM users");
    $getUsers->execute();
    $users = $getUsers->fetchAll();

    return $users;
}

if (isset($_SESSION['usuario'])) header('Location: index.php');





if (isset($_POST['email']) && isset($_POST['senha'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $usuarios = getUsersFromDb($database->getConnection());

    foreach ($usuarios as $usuario) {
        if ($usuario['email'] == $email && $usuario['password'] == $senha) {
            $_SESSION['erros'] = null;
            $_SESSION['usuario'] = $usuario['user'];

            $exp = time() + (60 * 60 * 24);
            setcookie('usuario', $usuario['user'], $exp);
            header('Location: index.php');
        }
    }


    if (!isset($_SESSION['usuario'])) {
        $_SESSION['erros'] = ['Usuário ou Senha inválidos'];
    }
}



?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Curso PHP</title>
</head>

<body class="login">

    <header class="cabecalho">
        <h1> Curso PHP </h1>
        <h2>Seja Bem Vindo</h2>
    </header>

    <main class="principal">
        <div class="conteudo">

            <h3>Identifique-se</h3>
            <?php if (isset($_SESSION['erros'])) : ?>
                <div class="erros">
                    <?php foreach ($_SESSION['erros'] as $erro) : ?>
                        <div class="alert alert-danger" role="alert">
                            <p><?= $erro ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

            <form action="#" method="POST">
                <div>
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email">
                </div>
                <div>
                    <label for="senha">Senha</label>
                    <input type="password" id="senha" name="senha">
                </div>


                <button class="btn btn-primary" type="submit">Entrar</button>
            </form>


        </div>
    </main>

    <footer class="rodape">
        Cod3r - wandersonsousa <?= date('Y'); ?>
    </footer>


</body>

</html>


<?php




?>