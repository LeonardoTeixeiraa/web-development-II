<?php
$bicho = filter_input(INPUT_GET, 'bicho', FILTER_SANITIZE_SPECIAL_CHARS);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Praticando Animais</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h2>Praticando Animais</h2>
    
    <div class="galeria">
        <a href="?bicho=Gato"><img src="img/gato.jpg" class="<?= $bicho == 'Gato' ? 'ativo-Gato' : '' ?>" alt="Gato"></a>
        <a href="?bicho=Cachorro"><img src="img/cachorro.jpeg" class="<?= $bicho == 'Cachorro' ? 'ativo-Cachorro' : '' ?>" alt="Cachorro"></a>
        <a href="?bicho=Hamster"><img src="img/hamster.jpg" class="<?= $bicho == 'Hamster' ? 'ativo-Hamster' : '' ?>" alt="Hamster"></a>
        <a href="?bicho=Lagartixa"><img src="img/largatixa.jpeg" class="<?= $bicho == 'Lagartixa' ? 'ativo-Lagartixa' : '' ?>" alt="Lagartixa"></a>
    </div>

    <?php if ($bicho): ?>
        <div class="info-box">
            <h3>Você clicou no <?= $bicho ?>.</h3>
            <?php
            switch ($bicho) {
                case 'Gato':
                    echo "<p>O gato é um mamífero da família dos felídeos e é um dos animais domésticos mais comuns.</p>";
                    echo "<p>Ele é conhecido por sua agilidade, independência e habilidade de caça.</p>";
                    break;
                case 'Cachorro':
                    echo "<p>O cachorro é um mamífero doméstico da família dos canídeos e é considerado um dos animais de estimação mais populares do mundo.</p>";
                    echo "<p>Ele foi domesticado há milhares de anos e, desde então, desenvolveu uma forte relação com os seres humanos, sendo conhecido por sua lealdade, inteligência e capacidade de aprender comandos.</p>";
                    break;
                case 'Hamster':
                    echo "<p>O hamster é um pequeno mamífero roedor da subfamília Cricetinae e é bastante popular como animal de estimação, especialmente entre crianças.</p>";
                    echo "<p>Ele possui corpo pequeno, cauda curta e bolsas nas bochechas, que usa para armazenar e transportar alimentos.</p>";
                    break;
                case 'Lagartixa':
                    echo "<p>A lagartixa é um pequeno réptil muito comum em ambientes urbanos, principalmente dentro de casas.</p>";
                    echo "<p>Ela pertence ao grupo dos lagartos e é conhecida por sua capacidade de subir em paredes e tetos, graças a estruturas especiais em suas patas que permitem aderência às superfícies.</p>";
                    break;
            }
            ?>
            <br>
            <a href="index.php" class="btn-limpar">Limpar tudo</a>
        </div>
    <?php endif; ?>

</body>
</html>