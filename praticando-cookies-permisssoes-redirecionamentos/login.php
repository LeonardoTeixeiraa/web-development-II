<?php
session_start();

if (isset($_SESSION['usuario'])) {
    $_SESSION['msg'] = "Usuário já está autenticado!";
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="d-flex flex-column min-vh-100 bg-light">

    <?php require './layout/header.php'; ?>

    <main class="container flex-grow-1 d-flex justify-content-center align-items-center">

        <div class="card shadow" style="width: 400px;">
            <div class="card-header text-center bg-light">
                <h2 class="m-0">Autenticação</h2>
            </div>

            <div class="card-body">

                <?php if (isset($_SESSION['erro'])): ?>
                    <div class="alert alert-danger">
                        <?= $_SESSION['erro'];
                        unset($_SESSION['erro']); ?>
                    </div>
                <?php endif; ?>

                <form action="autenticar.php" method="POST">

                    <div class="mb-3">
                        <label class="form-label">Usuário:</label>
                        <input type="text" name="usuario" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Senha:</label>
                        <input type="password" name="senha" class="form-control" required>
                    </div>

                    <div class="d-flex gap-2">
                        <button class="btn btn-primary">Entrar</button>
                        <button type="reset" class="btn btn-warning">Limpar</button>
                    </div>

                </form>
            </div>
        </div>

    </main>


    <?php require './layout/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>