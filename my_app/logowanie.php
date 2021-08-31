<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pl">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Logowanie</title>
  <link rel="stylesheet" href="../style.css" />
  <link rel="stylesheet" href="../forms/form_style.css" />
  <link rel="stylesheet" href="./test_style.css" />
  <script type="text/javascript" src="../ajaxjquery.min.js"></script>
  </style>
</head>

<body>
  <section id="widok">
    <div class="container">
      <h1>Logowanie</h1>
      <form action="./scripts/login.php" method="post">
        <div class="form-control form-control--big">
          <input class="form-control__input input__border--all simple-input__input" type="login" name="login" placeholder=" " required id="login" />
          <label class="simple-input__label input__label-space" for="login">Login</label>
        </div>
        <div class="form-control form-control--big">
          <input class="form-control__input input__border--all simple-input__input" type="password" name="password" placeholder=" " required id="password" />
          <label class="simple-input__label input__label-space" for="password">Hasło</label>
        </div>
        <button class="button button-primary" type="submit">Logowanie</button>
      </form>
      <p class="text">Nie mam takiego konta 😥 <a href="rejestracja2.php">Zarejestruj</a></p>
    </div>
  </section>
  <script src="../forms/script.js"></script>
</body>

</html>