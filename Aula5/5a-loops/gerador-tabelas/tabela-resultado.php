<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado da Tabela</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h3 class="mb-3">Sua Tabela Gerada:</h3>

        <?php
        $lin = $_POST['linhas'] ?? 0;
        $col = $_POST['colunas'] ?? 0;
        $estilo = $_POST['estilo'] ?? 'table-primary';

        echo "<div class='table-responsive'>";
        echo "<table class='table table-bordered table-striped $estilo'>";
        
        for ($i = 0; $i < $lin; $i++) {
            echo "<tr>";
            for ($j = 0; $j < $col; $j++) {
                echo "<td> - </td>";
            }
            echo "</tr>";
        }
        
        echo "</table>";
        echo "</div>";
        ?>

        <div class="mt-4">
            <a href="tabela-form.php" class="btn btn-secondary">Voltar e Editar</a>
        </div>
    </div>
</body>
</html>