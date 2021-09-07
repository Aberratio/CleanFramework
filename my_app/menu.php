<?php
session_start();
if (!isset($_SESSION['is_logged'])) {
    header('Location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="../style.css" />
    <link rel="stylesheet" href="../forms/form_style.css" />
    <link rel="stylesheet" href="./test_style.css" />
    <script type="text/javascript" src="../ajaxjquery.min.js"></script>
</head>

<body>
    <section id="widok">
        <div class="container">
            <h1>Jesteś zalogowany</h1>
            <div>
                <a class="text-decoration-none" href="./scripts/logout.php">Wyloguj</a>
                <p> Witaj
                    <?php
                    echo $_SESSION['login'];
                    ?>
                </p>
            </div>
        </div>
    </section>
</body>

</html>