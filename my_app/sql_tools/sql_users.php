<?php

include("connect.php");

function get_user_table()
{
    global $con;
    $get_users_query = 'SELECT * from users order by id_user';

    $run_users_query = mysqli_query($con, $get_users_query);


    echo '
    <table style="border-spacing:30px 0px;">
            <tr style="color: rgb(253, 197, 124);">
                <td style="padding-left: 7.5px; padding-right: 7.5px;"> Nazwa użytkownika </td>
            <tr>    
    ';
    while ($row_users = mysqli_fetch_array($run_users_query)) {
        $user_name = $row_users['login'];
        echo '<tr>
            <td>
            ' . $user_name . ' </td></tr>';
        }
    }
    echo '</table>';
}