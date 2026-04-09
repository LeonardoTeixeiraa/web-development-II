<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Tabuada</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <h1>Tabuada</h1>
    <form method="GET" action="praticando-tabuada.php">
        <div class="mb-3">
        <label class="form-label">Número: </label>
        <input class= "form-control" type="number" name="val" 
        value="<?= $_GET['val'] ?? '' ?>">
        </div>
        <button type="submit" class="btn btn-success">Enviar</button>
        <a href="praticando-tabuada.php"><button type="button" class="btn btn-warning">Limpar</button></a>
        
    </form>

    <?php
    if (isset($_GET['val']) && $_GET['val'] !== "") {
        $num = $_GET['val'];
        echo "<h2>Tabuada do $num</h2>";
        for ($i = 1; $i <= 10; $i++) {
            echo "$num x $i = " . ($num * $i) . "<br>";
        }
    }
    ?>
</body>
</html>