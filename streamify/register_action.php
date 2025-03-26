<?php

$servername = "localhost";
$username = "root"; 
$password = "";     
$dbname = "streamify";  

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Hash da senha para maior segurança
    $password_hash = password_hash($password, PASSWORD_DEFAULT);

   
    $sql = "INSERT INTO users (username, email, password) VALUES ('$user', '$email', '$password_hash')";

    if ($conn->query($sql) === TRUE) {
        echo "Registro realizado com sucesso!";
        
        header("Location: login.php");
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
