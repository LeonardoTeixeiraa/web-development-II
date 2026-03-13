<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificador de Números</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                
                <h1 class="mb-4 text-primary">Números primos</h1>
                
                <div class="card shadow-sm p-3 mb-4">
                    <div class="d-flex flex-wrap justify-content-center gap-4">
                        <a href="?num=1" class="btn btn-outline-secondary">Número 1</a>
                        <a href="?num=2" class="btn btn-outline-secondary">Número 2</a>
                        <a href="?num=3" class="btn btn-outline-secondary">Número 3</a>
                        <a href="?num=5" class="btn btn-outline-secondary">Número 5</a>
                        <a href="?num=10" class="btn btn-outline-secondary">Número 10</a>
                        <a href="?num=13" class="btn btn-outline-secondary">Número 13</a>
                        <a href="?num=20" class="btn btn-outline-secondary">Número 20</a>
                    </div>
                </div>

                <?php
                if (isset($_GET['num'])) {
                    $n = intval($_GET['num']); 
                    $divisores = 0;
                    for ($i = 1; $i <= $n; $i++) {
                        if ($n % $i == 0) $divisores++;
                    }
                    
                    $ePrimo = ($divisores == 2);
                    $parImpar = ($n % 2 == 0) ? "PAR" : "ÍMPAR";

                    $corTexto = $ePrimo ? "text-primary" : "text-danger";
                    $statusPrimo = $ePrimo ? "é PRIMO" : "não é PRIMO";
                    
                    echo "
                    <div class='alert alert-info shadow border-0'>
                        <h2 class='display-6 $corTexto fw-bold'>
                            O número $n $statusPrimo
                        </h2>
                        <p class='h4'>Além disso ele é <span class='badge bg-dark'>$parImpar</span></p>
                    </div>";
                }
                ?>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>