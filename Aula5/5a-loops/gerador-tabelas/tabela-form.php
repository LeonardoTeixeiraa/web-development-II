<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Tabelas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="mb-4">Gerador de Tabelas</h2>
                
                <form method="POST" action="tabela-resultado.php" class="border p-4 rounded bg-light shadow-sm">
                    <div class="mb-3">
                        <label class="form-label">Linhas:</label>
                        <input type="number" name="linhas" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Colunas:</label>
                        <input type="number" name="colunas" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Cor da tabela:</label>
                        <select name="estilo" class="form-select">
                            <option value="table-primary">Azul</option>
                            <option value="table-danger">Vermelho</option>
                            <option value="table-success">Verde</option>
                            <option value="table-dark">Preto</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary w-100">Gerar Tabela</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>