<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Praticando - Arrays</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="mb-4">Formulário de Interesses</h1>
                <form method="POST" action="destino.php" class="border p-4 rounded bg-light shadow-sm">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" name="interesses[]" value="Esportes" id="check1">
                                <label class="form-check-label" for="check1">Esportes</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" name="interesses[]" value="Futebol" id="check2">
                                <label class="form-check-label" for="check2">Futebol</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" name="interesses[]" value="Basquete" id="check3">
                                <label class="form-check-label" for="check3">Basquete</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" name="interesses[]" value="Tênis" id="check4">
                                <label class="form-check-label" for="check4">Tênis</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" name="interesses[]" value="Taekwondo" id="check5">
                                <label class="form-check-label" for="check5">Taekwondo</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" name="interesses[]" value="Tecnologia" id="check6">
                                <label class="form-check-label" for="check6">Tecnologia</label>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" name="interesses[]" value="Smartphones" id="check7">
                                <label class="form-check-label" for="check7">Smartphones</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" name="interesses[]" value="Computadores" id="check8">
                                <label class="form-check-label" for="check8">Computadores</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" name="interesses[]" value="Música" id="check9">
                                <label class="form-check-label" for="check9">Música</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" name="interesses[]" value="Filmes" id="check10">
                                <label class="form-check-label" for="check10">Filmes</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" name="interesses[]" value="Viagens" id="check11">
                                <label class="form-check-label" for="check11">Viagens</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" name="interesses[]" value="Leitura" id="check12">
                                <label class="form-check-label" for="check12">Leitura</label>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4 d-grid gap-2 d-md-block">
                        <button type="submit" class="btn btn-success me-md-2">Enviar</button>
                        <a href="index.php" class="btn btn-secondary">Voltar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>