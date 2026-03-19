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
    //outro metodo para pegar os dados é usando o filter input:
    echo "<strong>Utilizando o filter input para receber dados: </strong>";
    $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    echo "<p>Nome informado: $nome<br>Email: $email</p>";
    ?>



</body>

</html>