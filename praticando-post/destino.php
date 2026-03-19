<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destino</title>
</head>

<body>
    <h1>Destino</h1>
    <hr>
    <?php
    // Pega todos os dados que foi enviado na requisição POST em um array
    print_r($_POST);
    echo "<br>";
    //Atribui os dados vindos da requisição as variáveis
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    //Exibe os dados
    echo "<p>Nome informado: $nome<br>Email: $email</p>";
    ?>
</body>

</html>