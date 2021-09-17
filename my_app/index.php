<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie</title>
    <link rel="stylesheet" href="./test_style.css" />
    <style>
        #widok {
            display: flex;
            height: 100vh;
        }

        .formularz {
            background-color: white;
            margin: auto;
            width: 400px;
            min-height: 300px;
            border: none;
            border-radius: 5%;
            align-content: center;
            vertical-align: middle;
        }

        .polecenie {
            margin-top: auto;
            margin-bottom: auto;
            padding-top: 50px;
            text-align: center;
            font-weight: bold;
        }

        #powrot {
            display: block;
            margin-top: 100px;
            padding-bottom: 50px;
        }
    </style>
</head>

<body>
    <section id="widok">
        <div class="formularz">
            <p class="polecenie">Błędny login lub hasło.</p>
            <!-- <p class="polecenie">Jesteś nieudolnym hackerem! 🙄😛</p> -->
            <a class="polecenie" id="powrot" href="logowanie.php">Wróć do strony logowania</a>
        </div>
    </section>
</body>

</html>