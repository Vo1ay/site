<?php
  session_start();
require_once "config.php";

    $userid = $_SESSION["userid"];
    $checking = mysqli_query($link,"SELECT * FROM person WHERE nick='$userid'");
    $checkcount = mysqli_num_rows($checking);
    if($checkcount!=0){
        echo "Таке ім'я вже є, виберіть інше.";
    }
    else
    {
        mysqli_query($link,"UPDATE `person` SET `nick` = '$nick', `password` = '$password', `name` = '$name', `surname` = '$surname', `patronymic` = '$patronymic', `telephon` = '$telephon', `email` = '$email' WHERE `person`.`nomer_nick` = '$nomer_nick';");
         // getting user id
        $userid =  mysqli_insert_id($link);
            header("location:../menu.php");
    }
}