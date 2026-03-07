<?php
// Recebendo os dados via POST
$titulo    = filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_SPECIAL_CHARS);
$corTexto  = filter_input(INPUT_POST, 'corTexto', FILTER_SANITIZE_SPECIAL_CHARS);
$corFundo  = filter_input(INPUT_POST, 'corFundo', FILTER_SANITIZE_SPECIAL_CHARS);
$urlImagem = filter_input(INPUT_POST, 'urlImagem', FILTER_SANITIZE_URL);
$urlLink   = filter_input(INPUT_POST, 'urlLink', FILTER_SANITIZE_URL);

$corpoBruto = $_POST['corpo'] ?? ''; 
$corpo      = htmlspecialchars($corpoBruto); 
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title><?= $titulo ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body style="background-color: <?= $corFundo ?>; color: <?= $corTexto ?>;"> 
    
    <div class="container-dinamico">
        <h1><?= $titulo ?></h1>
        <hr>
        
        <p><?php echo nl2br($corpo); ?></p>

        <?php if ($urlImagem): ?>
            <img src="<?= $urlImagem ?>" class="img-custom" alt="Imagem enviada pelo usuário">
        <?php endif; ?>

        <br>

        <?php if ($urlLink): ?>
            <p>
                <a href="<?= $urlLink ?>" target="_blank" class="link-custom" style="color: <?= $corTexto ?>;">
                    Acessar o Link Informado
                </a>
            </p>
        <?php endif; ?>
        
        <br><br>
        <a href="form_dinamico.html" style="color: inherit;">Voltar para o formulário</a>
    </div>

</body>
</html>