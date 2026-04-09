<?php

if (isset($_GET['nome']) || isset($_GET['email']) || isset($_GET['cor']) || isset($_GET['limpar'])) {
    
    if (isset($_GET['limpar'])) {
        setcookie('usuario_nome', '', time() - 3600, "/");
        setcookie('usuario_email', '', time() - 3600, "/");
        setcookie('usuario_cor', '', time() - 3600, "/");

        $nome = '';
        $email = '';
        $cor_param = 'white';
    } else {

        if (isset($_GET['nome'])) {
            setcookie('usuario_nome', $_GET['nome'], time() + (86400 * 30), "/");
        }
        if (isset($_GET['email'])) {
            setcookie('usuario_email', $_GET['email'], time() + (86400 * 30), "/");
        }
        if (isset($_GET['cor'])) {
            setcookie('usuario_cor', $_GET['cor'], time() + (86400 * 30), "/");
        }
    }

    header("Location: destino-get.php");
    exit;
}

$nome = $_COOKIE['usuario_nome'] ?? '';
$email = $_COOKIE['usuario_email'] ?? '';
$cor_param = $_COOKIE['usuario_cor'] ?? 'white';

$cor_fundo = 'white';
if ($cor_param == 'red')   $cor_fundo = '#ffdddd';
if ($cor_param == 'green') $cor_fundo = '#ddffdd';
if ($cor_param == 'blue')  $cor_fundo = '#ddddff';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Destino GET - Bruno</title>
    <style>
        body {
            background-color: <?php echo $cor_fundo; ?>;
            font-family: Arial, sans-serif;
            margin: 40px;
            transition: background-color 0.3s;
        }

        .link-texto {
            display: block;
            margin-bottom: 10px;
            text-decoration: none;
            color: blue;
        }

        .container-central {
            display: flex;
            justify-content: center; 
            gap: 30px;
            margin-top: 50px;
        }

        .quadrado {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 350px;
            height: 350px;
            border: 6px solid #000;
            position: relative;
            transition: transform 0.2s;
        }

        .quadrado:hover { transform: scale(1.05); }

        .simbolo-canva {
            position: absolute;
            bottom: 15px;
            right: 15px;
            width: 50px;
        }

        .bg-red { background-color: red; }
        .bg-green { background-color: green; }
        .bg-blue { background-color: blue; }
    </style>
</head>
<body>

    <h1>Destino GET</h1>
    <hr>

    <?php if (!empty($nome)): ?>
        <p>Nome informado: <strong><?php echo htmlspecialchars($nome); ?></strong></p>
        <p>Email: <strong><?php echo htmlspecialchars($email); ?></strong></p>
    <?php else: ?>
    <?php endif; ?>

    <br>
    <a href="?nome=Leonardo&email=nardotp18@gmail.com" class="link-texto">
        Nome/Email: Leonardo | nardotp18@gmail.com
    </a>
    <a href="?nome=José da Silva&email=jose1987@outlook.com" class="link-texto">
         Nome/Email: José da Silva | jose1987@outlook.com
    </a>

    <br>
    <a href="?limpar=true" class="link-texto" style="color: red; font-weight: bold;">Limpar tudo</a>

    <div class="container-central">
        <a href="?cor=red" class="quadrado bg-red">
            <img src="https://www.skillfinder.com.au/media/wysiwyg/Canva-Logo-White-1080.png" class="simbolo-canva" alt="Canva">
        </a>
        
        <a href="?cor=green" class="quadrado bg-green">
            <img src="https://www.skillfinder.com.au/media/wysiwyg/Canva-Logo-White-1080.png" class="simbolo-canva" alt="Canva">
        </a>
        
        <a href="?cor=blue" class="quadrado bg-blue">
            <img src="https://www.skillfinder.com.au/media/wysiwyg/Canva-Logo-White-1080.png" class="simbolo-canva" alt="Canva">
        </a>
    </div>

</body>
</html>