<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HelloWorld</title>
</head>
<body>
 
    <h1>My first Page Php</h1>
    <h2>Hello world!</h2>
  <?php
  date_default_timezone_set("America/Sao_Paulo");
  echo "Olá meu nome é Leonardo <br>";
  echo "Hoje é dia " . date("d/m/y");
  echo " e agora são " . date("H:i:s");
  ?>
  <br><br>
  <a href="../">Voltar para a inicial</a>
</body>
</html>