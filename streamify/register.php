<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->execute([$username]);

    if ($stmt->rowCount() > 0) {
        echo "Usuário já existe!";
    } else {
        $stmt = $pdo->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
        if ($stmt->execute([$username, $password])) {
            echo "Usuário registrado com sucesso!";
        } else {
            echo "Erro ao registrar usuário.";
        }
    }
}
?>

<form action="register_action.php" method="POST">


<?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar - Streamify</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Cabeçalho com links de navegação -->
    <header>
        <div class="logo">
            <h1>Streamify</h1>
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Início</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="register.php">Registrar</a></li>
            </ul>
        </nav>
    </header>

    <!-- Formulário de Registro -->
    <div class="container">
        <section class="register-form">
            <h2>Crie uma nova conta</h2>
            <form action="register_action.php" method="POST">
                <input type="text" name="username" placeholder="Usuário" required>
                <input type="email" name="email" placeholder="E-mail" required>
                <input type="password" name="password" placeholder="Senha" required>
                <button type="submit">Registrar</button>
            </form>
            <p>Já tem uma conta? <a href="login.php">Faça login!</a></p>
        </section>
    </div>

    <footer>
        <p>&copy; 2025 Streamify. Todos os direitos reservados.</p>
    </footer>

</body>
</html>
