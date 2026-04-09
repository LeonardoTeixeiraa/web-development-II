<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado da Contagem</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5 text-center">
        <div class="card shadow-sm p-4">
            <h3 class="mb-4">Resultado:</h3>
            <div class="d-flex flex-wrap justify-content-center gap-2">
                <?php
                    $inicio = $_POST['inicio'] ?? 0;
                    $final = $_POST['final'] ?? 0;
                    $incremento = $_POST['incremento'] ?? 1;

                    if ($incremento <= 0) $incremento = 1;

                    if ($inicio <= $final) {
                        for ($i = $inicio; $i <= $final; $i += $incremento) {
                            echo "$i ";
                        }
                    } else {
                        for ($i = $inicio; $i >= $final; $i -= $incremento) {
                            echo "$i ";
                        }
                    }
                ?>
            </div>
            
            <hr class="mt-4">
            <div class="mt-3">
                <a href="contador-form.php" class="btn btn-secondary">Fazer nova contagem</a>
            </div>
        </div>
    </div>

</body>
</html>