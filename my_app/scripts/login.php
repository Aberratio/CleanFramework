<?php
session_start();
require_once "../../configuration/connect.php";
global $con;

$db_connection = @new mysqli($host, $db_user, $db_password, $db_name);

if ($db_connection->connect_errno != 0) {
    echo "Error" . $db_connection->connect_errno;
} else {

    $user_login = $_POST['login'];
    $user_password = $_POST['password'];

    $get_login_query = "SELECT * from users WHERE login='$user_login' AND password='$user_password'";

    $run_login = mysqli_query($con, $get_login_query);

    $user_with_credentials = mysqli_fetch_array($run_login);

    if ($user_with_credentials) {
        $_SESSION['id'] = $user_with_credentials['id'];
        $_SESSION['login'] = $user_with_credentials['login'];
        $_SESSION['is_logged'] = true;

        header('Location: ../menu.php');
    } else {
        header('Location: ../index.php');
    }

    $db_connection->close();
}
