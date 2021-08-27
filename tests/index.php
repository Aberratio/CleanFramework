<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie</title>
    <style>
        body {
            background-color: lightskyblue;
            font-family: Arial;
        }

        #widok {
            display: flex;
            height: 100vh;
        }

        .formularz {
            background-color: gray;
            margin: auto;
            width: 500px;
            height: 380px;
            border: 2px solid black;
            align-content: center;
            vertical-align: middle;
        }

        #polecenie {
            margin-top: auto;
            margin-bottom: auto;
            padding-top: 100px;
            text-align: center;
            font-weight: bold;
        }

        #powrot {
            padding-top: 150px;
            padding-bottom: 50px;
            margin: 0 auto;
            font-size: 100%;
            text-align: center;
            /* align-self: center; */
            text-decoration: none;
            display: block;
            vertical-align: middle;
        }
    </style>
</head>

<body>
    <section id="widok">
        <div class="formularz">
            <p id="polecenie">Nie jesteś zalogowany</p>
            <a id="powrot" href="rejestracja2.html">Powrót</a>
        </div>
    </section>
</body>

</html>