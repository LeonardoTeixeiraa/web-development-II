<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        .img-lorem {
            width: 30%;
        }

        .inicio p {
            text-align: justify;
            text-indent: 3.5em;
        }
    </style>
</head>

<body class="d-flex flex-column min-vh-100">
    <?php require './layout/header.php' ?>

    <main class="inicio container flex-grow-1">
        <div class="bg-light p-4 mb-4 rounded">
            <h1 class="text-center">Página inicial</h1>
        </div>

        <img class="img-lorem img-thumbnail m-4 rounded float-end" src="https://assets.justinmind.com/wp-content/uploads/2018/11/Lorem-Ipsum-alternatives-1024x655.png" alt="Lorem Ipsum">

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sit amet egestas sapien. Fusce porttitor tellus vel eleifend dictum. Aenean sed neque sit amet risus eleifend pulvinar. Aliquam erat volutpat. Duis tempor non risus sit amet accumsan. Ut eget nisl ipsum. Morbi ultrices nec mi vitae maximus. Morbi nec ornare justo. Pellentesque aliquam ex eget purus tempor sodales. In imperdiet sem nibh, eget faucibus tortor aliquam eget.</p>

        <p>Quisque imperdiet purus vel felis vulputate, quis sollicitudin enim volutpat. Curabitur elementum urna dolor. Nulla suscipit leo sit amet erat egestas commodo. Ut accumsan turpis eu justo placerat, vitae consequat ipsum suscipit. Nunc et fringilla nunc. Nullam ut lobortis nulla. Cras euismod turpis posuere sapien ornare, nec lobortis libero rhoncus. Phasellus mauris lorem, eleifend eget tincidunt quis, varius eu est. Fusce metus risus, lobortis eget justo nec, condimentum ullamcorper augue. Phasellus sollicitudin magna non euismod elementum. Proin sodales venenatis vulputate. Cras a turpis lacus. Aliquam sit amet maximus magna. Integer nec nibh ipsum. Etiam quis lacus at nisi scelerisque mattis sit amet et elit. Donec vulputate dignissim nunc id euismod.</p>
    </main>

    <?php require './layout/footer.php' ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>