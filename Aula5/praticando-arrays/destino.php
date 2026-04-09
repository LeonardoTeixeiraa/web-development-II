<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destino - Processamento</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-3">Dados Recebidos</h1>

        <div class="card p-3 bg-light mb-4">
            <h5>Debug ($_POST):</h5>
            <pre><?php var_dump($_POST); ?></pre>
        </div>

        <h3>Seus Interesses:</h3>
        <?php
        // Recebe os interesses ou cria um array vazio se nada foi marcado
        $interesses = isset($_POST['interesses']) ? $_POST['interesses'] : [];

        if (!empty($interesses)) {
            // Ordena em ordem alfabética
            sort($interesses);

            echo "<ul>";

            // Determina quantos itens mostrar (máximo 3)
            $total = count($interesses);
            $limite = ($total > 3) ? 3 : $total;

            for ($i = 0; $i < $limite; $i++) {
                echo "<li>" . htmlspecialchars($interesses[$i]) . "</li>";
            }

            if ($total > 3) {
                echo "<li>...</li>";
            }
            echo "</ul>";
        } else {
            echo "<p>Nenhum interesse foi selecionado.</p>";
        }
        ?>

        <a href="index.php" class="btn btn-secondary mt-3">Voltar</a>
    </div>
</body>
</html>