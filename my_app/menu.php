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
            <h1>Lista zadań</h1>
            <div>
                <a class="text-decoration-none" href="./scripts/logout.php">Wyloguj</a>
                <p> Witaj
                    <?php
                    echo $_SESSION['login'];
                    ?>
                </p>
                <p>
                    <?php
                    echo "Przycisk z wyskakującycym popupem - dodaj nowe zadanie.";
                    echo "Popup: nazwa zadania / kategoria / termin (od - do) / zapisz";
                    ?>
                </p>
                <p>
                    <?php
                    echo "Widok todo listy na dzisiaj";
                    echo "Usuwanie i edycja";
                    ?>
                </p>
                <p>
                    <?php
                    echo "Widok todo listy na następny tydzień";
                    echo "Usuwanie i edycja";
                    ?>
                </p>

            </div>
        </div>
    </section>
</body>

</html>