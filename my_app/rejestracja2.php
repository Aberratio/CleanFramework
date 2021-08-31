<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rejestracja</title>
    <link rel="stylesheet" href="../style.css" />
    <link rel="stylesheet" href="./test_style.css" />
    <link rel="stylesheet" href="../forms/form_style.css" />
    <script type="text/javascript" src="../ajaxjquery.min.js"></script>
</head>

<body>
    <section id="widok">
        <div class="container">
            <h1>Rejestracja</h1>
            <form action="./scripts/registration.php" method="post">
                <div class="form-control form-control--big">
                    <input class="form-control__input input__border--all simple-input__input" type="login" placeholder=" " required id="login" name="login" />
                    <label class="simple-input__label input__label-space" for="login">Login</label>
                </div>
                <div class="form-control form-control--big">
                    <input class="form-control__input input__border--all simple-input__input" type="email" placeholder=" " required id="email" name="email" />
                    <label class="simple-input__label input__label-space" for="email">Email</label>
                </div>

                <div class="form-control form-control--big">
                    <input class="form-control__input input__border--all simple-input__input" type="password" placeholder=" " required id="password" name="password" />
                    <label class="simple-input__label input__label-space" for="password">Hasło</label>
                </div>

                <div class="form-control form-control--big">
                    <input class="form-control__input input__border--all simple-input__input" type="password" placeholder=" " required id="password2" name="password2" />
                    <label class="simple-input__label input__label-space" for="password2">Powtórz hasło</label>
                </div>
                <button class="button button-primary" type="submit">Zarejestruj</button>

                <p class="text">Mam konto! <a href="logowanie.php">Zaloguj</a></p>
            </form>
        </div>
    </section>
    <script src="../forms/script.js"></script>
</body>

</html>