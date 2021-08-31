<?php
session_start();
require_once "../../configuration/connect.php";
global $con;

$db_connection = @new mysqli($host, $db_user, $db_password, $db_name);

function check_if_login_free($con, $user_login)
{
    #Sprawdzenie, czy użytkownik o podanym loginie istnieje już w bazie danych.
    $get_check_login_query = "SELECT * from users WHERE login='$user_login'";
    $check_login = mysqli_query($con, $get_check_login_query);
    $user_with_same_login = mysqli_fetch_array($check_login);

    if ($user_with_same_login) {
        echo "Użytkownik o podanym loginie istnieje w bazie danych";
        return false;
    }

    return true;
}

function check_if_email_free($con, $user_email)
{
    #Sprawdzenie, czy użytkownik o podanym adresie email istnieje już w bazie danych.
    $get_check_email_query = "SELECT * from users WHERE email='$user_email'";
    $check_email = mysqli_query($con, $get_check_email_query);
    $user_with_same_email = mysqli_fetch_array($check_email);

    if ($user_with_same_email) {
        echo "Użytkownik o podanym adresie mailowym istnieje w bazie danych";
        return false;
    }

    return true;
}

function check_if_same_password($user_password, $user_repeat_password)
{
    #Sprawdzenie, czy oba hasła są identyczne
    if ($user_password != $user_repeat_password) {
        echo "Podane hasła się różnią";
        return false;
    }

    return true;
}

function check_if_correct_password($user_password)
{
    #Sprawdzenie, czy hasła jest prawidłowe
    $MIN_PASSWORD_LENGTH = 8;
    $MAX_PASSWORD_LENGTH = 23;

    #Sprawdzenie, czy hasło ma odpowiednią długość
    if (strlen($user_password) < $MIN_PASSWORD_LENGTH) {
        echo "Hasło jest zbyt krótkie";
        return false;
    } elseif (strlen($user_password) > $MAX_PASSWORD_LENGTH) {
        echo "Hasło jest zbyt długie";
        return false;
    }

    return true;
}


if ($db_connection->connect_errno != 0) {
    echo "Error" . $db_connection->connect_errno;
} else {
    $user_login = $_POST['login'];
    $user_email = $_POST['email'];
    $user_password = $_POST['password'];
    $user_repeat_password = $_POST['password2'];

    if (
        check_if_login_free($con, $user_login) &
        check_if_email_free($con, $user_email) &
        check_if_same_password($user_password, $user_repeat_password) &
        check_if_correct_password($user_password)
    ) {
        #rejestracja nowego użytkownika
        $db_connection->query("INSERT INTO `users`(`login`, `email`, `password`) VALUES ('$user_login', '$user_email', '$user_password')");
        echo "zarejestrowano użytkownika pomyślnie!";
    }

    $db_connection->close();
}
