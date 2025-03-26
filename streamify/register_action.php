<?php
// Conexão com o banco de dados
$servername = "localhost";
$username = "root"; // O nome de usuário padrão no XAMPP é "root"
$password = "";     // O MySQL geralmente não tem senha para o usuário root no XAMPP
$dbname = "streamify";  // O nome do banco de dados que você acabou de criar

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}


// Recebendo os dados do formulário
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Hash da senha para maior segurança
    $password_hash = password_hash($password, PASSWORD_DEFAULT);

    // SQL para inserir o novo usuário no banco de dados
    $sql = "INSERT INTO users (username, email, password) VALUES ('$user', '$email', '$password_hash')";

    if ($conn->query($sql) === TRUE) {
        echo "Registro realizado com sucesso!";
        // Aqui você pode redirecionar o usuário para a página de login ou para o painel
        header("Location: login.php");
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
