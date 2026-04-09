<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Perfil</title>
</head>

<body class="d-flex flex-column min-vh-100">
    <?php require './layout/header.php'; ?>

    <main class="container mt-4">

        <h2>Perfil do Usuário</h2>

        <ul class="list-group">
            <li><strong>Usuário:</strong> <?= $_SESSION['usuario']; ?></li>
            <li><strong>Email:</strong> emaildoleozim.com</li>
            <li><strong>Telefone:</strong> (17) 0000-0000</li>
            <li><strong>Endereço:</strong> Av.Jerônimo Figueira da Costa, 3014 </li>
            <li><strong>Cidade:</strong> (17) Votuporanga</li>
            <li><strong>Estado:</strong> (17) 0000-0000</li>
        </ul>

    </main>

    <?php require './layout/footer.php'; ?>

</body>

</html>