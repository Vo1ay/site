<?php
  session_start();
require_once "config.php";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nomer_nick = $_POST['nomer_nick'];
    $nick = $_POST["nick"];
    $password = $_POST["password"];
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $patronymic = $_POST["patronymic"];
    $telephon = $_POST["telephon"];
    $email = $_POST["email"];
    $checking = mysqli_query($link,"SELECT * FROM person WHERE nick='$nick'");
    $checkcount = mysqli_num_rows($checking);
    if($checkcount!=0){
        echo "Таке ім'я вже є, виберіть інше.";
    }
    else
    {
        mysqli_query($link,"UPDATE `person` SET `nick` = '$nick', `password` = '$password', `name` = '$name', `surname` = '$surname', `patronymic` = '$patronymic', `telephon` = '$telephon', `email` = '$email' WHERE `person`.`nomer_nick` = '$nomer_nick';");
            header("location:../menu.php");
    }}
?>