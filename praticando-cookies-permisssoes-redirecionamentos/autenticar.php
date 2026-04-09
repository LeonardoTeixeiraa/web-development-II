<?php
session_start();

$usuario = $_POST['usuario'] ?? '';
$senha = $_POST['senha'] ?? '';

if ($usuario === "LeonardoTeixeiraa" && $senha === "123") {

    $_SESSION['usuario'] = $usuario;

    header("Location: index.php");
    exit;

} else {

    $_SESSION['erro'] = "Usuário ou senha inválidos!";
    header("Location: login.php");
    exit;
}