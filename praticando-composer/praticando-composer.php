<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Praticando - Composer</title>
    <style>
        .container {
            max-width: 500px;
            margin-top: 50px;
        }

        .result-box {
            margin-top: 20px;
            padding: 15px;
            background: #37f54a;
            border-radius: 8px;
            border: 1px solid #dee2e6;
        }
    </style>
</head>

<body>
    <div class="container">
        <header>
            <h1>Praticando Composer - Busca CEP</h1>
        </header>

        <main>
            <form action="" method="POST">
                <div class="mb-3">
                    <label for="cep" class="form-label">CEP:</label>
                    <input type="text" name="cep" id="cep" class="form-control" placeholder="Somente números" required>
                </div>
                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-primary w-100">Enviar</button>
                    <button type="reset" class="btn btn-warning w-100">Limpar</button>
                </div>
            </form>

            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['cep'])) {
                require_once 'vendor/autoload.php';

                $cep = $_POST['cep'];

                try {
                    $address = \Claudsonm\CepPromise\CepPromise::fetch($cep);

                    echo '<div class="result-box">';
                    echo "<strong>Rua:</strong> {$address->street}<br>";
                    echo "<strong>Bairro:</strong> {$address->district}<br>";
                    echo "<strong>Cidade:</strong> {$address->city}<br>";
                    echo "<strong>Estado:</strong> {$address->state}";
                    echo '</div>';
                } catch (Exception $e) {
                    echo '<div class="alert alert-danger mt-3">CEP não encontrado ou inválido!</div>';
                }
            }
            ?>
        </main>
    </div>
</body>

</html>