<?php
session_start();

function validarSessao() {
    if (!isset($_SESSION['login']) || !isset($_SESSION['senha']) || !isset($_SESSION['time'])) {
        echo "<script>
                alert('Os dados da sessão foram perdidos. Por favor, faça login novamente.');
                window.location.href = 'aula10.php';
              </script>";
        exit;
    }

    $_SESSION['ultrequest'] = date('Y-m-d H:i:s');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    $time = $_POST['time'] ?? ''; 

    // Efetua validação de login
    if ($login === "admin" && $senha === "adm" && !empty($time)) {
        $_SESSION['login'] = $login;
        $_SESSION['senha'] = $senha;
        $_SESSION['time'] = $time;
        $_SESSION['dateinit'] = date('Y-m-d H:i:s');
        $_SESSION['ultrequest'] = date('Y-m-d H:i:s');

        echo "<h1>Bem-vindo, $login!</h1>";
        echo "<p>Time: $time</p>";
        echo "<p>Data/hora de início da sessão: " . $_SESSION['dateinit'] . "</p>";
        echo "<p>Data/hora da última requisição: " . $_SESSION['ultrequest'] . "</p>";
        echo '<a href="aula10">Encerrar sessão</a>';
    } else {
        echo "<script>
                alert('Login, senha ou time inválidos. Tente novamente.');
                window.location.href = 'aula10.php';
              </script>";
    }
    exit;
}

validarSessao();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula10</title>
</head>
<body>
    <h1>Login</h1>
    <form action="aula10.php" method="post">
        <label for="login">Login</label>
        <input type="text" name="login" id="login" required><br><br>

        <label for="senha">Senha</label>
        <input type="password" name="senha" id="senha" required><br><br>

        <label for="time">Time</label>
        <input type="text" name="time" id="time" required><br><br>

        <button type="submit">Logar</button>
    </form>
</body>
</html>
