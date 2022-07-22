<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="vieport" content="with=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP блог</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="icon" href="/img/p.png">
    <link rel="stylesheet" href="/css/main.css">
</head>
<body>
<?php require 'bloks/header.php'; ?>
    <main class="container mt-5">
        <div class="row">
            <div class="col-md-8">
                Основная часть сайта
            </div>
            <?php require 'bloks/aside.php'; ?>
        </div>
    </main>
<?php require 'bloks/footer.php'; ?>
</body>

</html>