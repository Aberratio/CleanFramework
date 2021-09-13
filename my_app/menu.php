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

                <div class="popup" onclick="myFunction()">Tekst do podpowiedzi
                    <span class="popuptext" id="myPopup">Podpowiedź</span>
                </div>

                <!-- Trigger/Open The Modal -->
                <button id="myBtn">Dodaj zadanie</button>

                <!-- The Modal -->
                <div id="myModal" class="modal">

                    <!-- Modal content -->
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <p>Panel dodawania nowego zadania</p>
                        <form action="./scripts/login.php" method="post">
                            <div class="form-control form-control--big">
                                <input class="form-control__input input__border--all simple-input__input" type="text" name="task_name" placeholder=" " required id="task_name" />
                                <label class="simple-input__label input__label-space" for="task_name">Nazwa nowego zadania</label>
                            </div>
                            <div class="form-control form-control--big">
                                <input class="form-control__input input__border--all simple-input__input" type="text" name="task_category" placeholder=" " required id="task_category" />
                                <label class="simple-input__label input__label-space" for="task_category">Kategoria nowego zadania</label>
                            </div>
                            <div class="form-control form-control--big">
                                <input class="form-control__input input__border--all simple-input__input" type="text" name="task_time" placeholder=" " required id="task_time" />
                                <label class="simple-input__label input__label-space" for="task_time">Termin nowego zadania</label>
                            </div>
                            <button class="button button-primary" type="submit">Dodaj zadanie</button>
                        </form>
                    </div>

                </div>
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

    <script>
        // ========= POPUP BEGIN =========
        // When the user clicks on <div>, open the popup
        function myFunction() {
            var popup = document.getElementById("myPopup");
            popup.classList.toggle("show");
        }
        // ========= POPUP BEGIN =========

        // ========= MODAL BEGIN =========
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on the button, open the modal
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
        // ========= MODAL END =========
    </script>
</body>

</html>