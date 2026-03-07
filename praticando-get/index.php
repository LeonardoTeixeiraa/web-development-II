<?php
$nome = filter_input(INPUT_GET, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_GET, 'email', FILTER_SANITIZE_EMAIL);
$cor = filter_input(INPUT_GET, 'cor', FILTER_SANITIZE_SPECIAL_CHARS) ?: 'white'; 
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Destino GET Integrado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body style="background-color: <?= $cor ?>;" class="<?= ($cor == 'blue' || $cor == 'red' || $cor == 'green') ? 'dark-mode' : '' ?>">    
    <h1>Destino GET</h1>
    <hr>
    
    <?php if ($nome || $email): ?>
        <p>Nome informado: <?= $nome ?><br>
        Email: <?= $email ?></p>
    <?php endif; ?>

    <p>
        <a href="?nome=Eder&email=epansani@gmail.com&cor=<?= $cor ?>">Enviar dados [Eder]</a><br><br>
        <a href="?nome=Leonardo&email=leonardo.teixeira@aluno.ifsp.edu.br&cor=<?= $cor ?>">Enviar dados [Leonardo]</a>
    </p>
    
    <p><a href="index.php">Limpar tudo</a></p>

    <hr>
    <h3>Escolha uma cor de fundo:</h3>
    <a href="?nome=<?= $nome ?>&email=<?= $email ?>&cor=red" class="cor-box bg-red">Red</a>
    <a href="?nome=<?= $nome ?>&email=<?= $email ?>&cor=green" class="cor-box bg-green">Green</a>
    <a href="?nome=<?= $nome ?>&email=<?= $email ?>&cor=blue" class="cor-box bg-blue">Blue</a>
</body>
</html>