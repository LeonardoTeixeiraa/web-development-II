<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador Simples</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <div class="row justify-content-center">
                        <h2 class="card-title h4 mb-4 text-center">Contador</h2>
                        
                        <form method="POST" action="contador-resultado.php">
                            <div class="mb-3">
                                <label class="form-label">Início:</label>
                                <input type="number" name="inicio" class="form-control" required>
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label">Final:</label>
                                <input type="number" name="final" class="form-control" required>
                            </div>
                            
                            <div class="mb-4">
                                <label class="form-label">Incremento:</label>
                                <input type="number" name="incremento" class="form-control" value="1" required>
                            </div>
                            
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success">Contar agora</button>
                            </div>
                        </form>
                    </div>
    </div>

</body>
</html>