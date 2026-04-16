<?php
require 'includes/auth.php'
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <!-- NAVBAR -->
    <nav class="navbar navbar-dark bg-dark px-4">
        <span class="navbar-brand">Gerenciador de tarefas</span>
        <div>
            <span class="text-white me-3">
                Olá, <?= $_SESSION['usuario'] ?>
            </span>
            <a href="logout.php" class="btn btn-outline-light btn-sm">Sair</a>
        </div>
    </nav>

    <!-- CONTEÚDO -->
    <div class="container mt-4">

        <!-- Título + botão -->
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h3>Minhas Tarefas</h3>
            <button class="btn btn-primary">+ Nova Tarefa</button>
        </div>

        <!-- CARD -->
        <div class="card shadow">
            <div class="card-body">

                <!-- TABELA -->
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Título</th>
                            <th>Status</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>

                        <!-- Exemplo estático -->
                        <tr>
                            <td>Estudar PHP</td>
                            <td><span class="badge bg-warning">Pendente</span></td>
                            <td>
                                <button class="btn btn-success btn-sm">Concluir</button>
                                <button class="btn btn-danger btn-sm">Excluir</button>
                            </td>
                        </tr>

                    </tbody>
                </table>

            </div>
        </div>

    </div>

</body>

</html>