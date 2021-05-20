<?php
  session_start();
require_once "config.php";
    $nomer_car = $_POST["nomer_car"];
    $model = $_POST["model"];
    $date_buy = $_POST["date_buy"];
    $probeg = $_POST["probeg"];
    $price_h = $_POST["price_h"];
    $city = $_POST["city"];
    $stan_car = $_POST["stan_car"];
    $descriptionn = $_POST["descriptionn"];
    $photo = $_POST["photo"];
$conn = mysqli_connect("127.0.0.1", "root", "", "orp.ua");
$fn = $_FILES['photo']['tmp_name'];
$nn = $_FILES['photo']['name'];
$photo1  = $_POST['photo1'];
$id_img1 = $_POST['id_img1'];
if(move_uploaded_file($fn,'../images/'.$nn)){
    if (mysqli_query($conn,"UPDATE `base_car` SET `model` = '$model', `date_buy` = '$date_buy', `probeg` = '$probeg', `price_h` = '$price_h', `city` = '$city', `stan_car` = '$stan_car', `descriptionn` = '$descriptionn', `photo` = '$nn' WHERE `base_car`.`nomer_car` = '$nomer_car';"
)) { }}
else{
}
if (mysqli_query($conn,"
        UPDATE `base_car` SET `photo` = '$nn'
        WHERE `base_car`.`nomer_car` = '$nomer_car';"
)) {}
$ph_id1 = new ph_id($_FILES['photo1']['tmp_name'], $_FILES['photo1']['name'],$_POST['id_img1']);
$ph_id2 = new ph_id($_FILES['photo2']['tmp_name'], $_FILES['photo2']['name'],$_POST['id_img2']);
$ph_id3 = new ph_id($_FILES['photo3']['tmp_name'], $_FILES['photo3']['name'],$_POST['id_img3']);
header("location:../menu.php");
?>