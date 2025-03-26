<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}

echo "Bem-vindo, " . $_SESSION['username'] . "!";
?>
