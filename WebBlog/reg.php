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
<?php require 'bloks/header.php'; ?>
<main class="container mt-5">
    <div class="row">
        <div class="col-md-8">
            <h4>Форма регистрации</h4>
            <form action="" method="POST">
                <label for="username">Ваше имя</label>
                <input type="text" name="username" id="username" class="form-control">

                <label for="email">Ваш email</label>
                <input type="text" name="email" id="email" class="form-control">

                <label for="login">Ваш login</label>
                <input type="text" name="login" id="login" class="form-control">

                <label for="pass">Ваш пароль</label>
                <input type="password" name="pass" id="pass" class="form-control">

                <div class="alert alert-danger mt-2 mb-2" id="errorBlock"></div>

                <button type="button" id="reg_user" class="btn btn-success mt-2 mb-2">Зарегистрироваться</button>
            </form>
        </div>
        <?php require 'bloks/aside.php'; ?>

    </div>
</main>
<?php require 'bloks/footer.php'; ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
    $('#reg_user').click(function() {
        var name = $('#username').val();
        var email = $('#email').val();
        var login = $('#login').val();
        var pass = $('#pass').val();

        $.ajax({
            url: 'reg/reg.php',
            type: 'POST',
            cache: false,
            date: {
                'username': name,
                'email': email,
                'login': login,
                'pass': pass
            },
            dataType: 'html',
            success: function(data) {
                if (data == 'Готово') {
                    $('#reg_user').text('Все готово');
                    $('#errorBlock').hide();
                } else {
                    $('#errorBlock').show();
                    $('#errorBlock').text(data);
                }
            }
        });
    });
</script>

</body>

</html>