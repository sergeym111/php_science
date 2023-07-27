<?php
session_start();
if (isset($_SESSION['user'])) {
    header('location: vendor/application.php');
}
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Research...</title>
    <link rel="icon" href="assets/img/vniioz.png" sizes="16x16 32x32">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
<div class="container-fluid d-flex justify-content-center py-4  fs-1">
    <div class="row">
        <div class="col text-light fs-1 py-2 px-4 bg-success ">
            Авторизация
        </div>
    </div>
</div>
<div class="container-fluid d-flex justify-content-center">
    <div class="row">
        <div class="col fs-1">
            <!-- Authorization form-->
            <form action="signin.php" method="post" class="authority">
                <div class="mb-3">
                    <label for="Login" class="form-label small">Имя учетной записи</label>
                    <input type="text" class="form-control bg-success text-light" name="login"
                           aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="PasswordInput" class="form-label small">Пароль</label>
                    <input type="password" class="form-control bg-success text-light" name="password">
                </div>
                <div class="mb-3 d-flex justify-content-center py-5">
                    <button type="submit" class="btn btn-success btn-lg">
                        <span style="font-size: larger">
                            Войти
                        </span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="container-fluid d-flex justify-content-center py-4  fs-1">
    <div class="row">
        <div class="col text-light fs-1 py-2 px-4
        <?php
        if ($_SESSION['message']) {
            echo 'bg-success';
        }
        else {
            echo 'bg-white';
        }
        ?> ">
            <?php
            if ($_SESSION['message']) {
                echo '<p> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
            ?>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>
</html>