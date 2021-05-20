<?php
  session_start();
require_once "config.php";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nomer_nick = $_POST["nomer_nick"];
    $model = $_POST["model"];
    $date_buy = $_POST["date_buy"];
    $probeg = $_POST["probeg"];
    $price_h = $_POST["price_h"];
    $city = $_POST["city"];
    $stan_car = $_POST["stan_car"];
    $descriptionn = $_POST["descriptionn"];
    $photo = $_POST["photo"];
    $nomer_car = rand(1, 10000);
    $checking = mysqli_query($link,"SELECT * FROM base_car WHERE nomer_car='$nomer_car'");
    $checkcount = mysqli_num_rows($checking);
    for ($i=0; $i < 1; $i++) {
        if ($checkcount!=0){
        $nomer_car = rand(1, 10000);
        $i--;
        }
        else{
        }
    }
    $checking = mysqli_query($link,"SELECT * FROM base_car WHERE nomer_car='$nomer_car'");
    $checkcount = mysqli_num_rows($checking);
    if($checkcount!=0){
    }
    else
    {
$fn = $_FILES['photo']['tmp_name'];
$nn = $_FILES['photo']['name'];
$pn = '../images/'.$nn;
        mysqli_query($link,"INSERT INTO `base_car` (`nomer_car`,`nomer_nick`, `model`, `date_buy`, `probeg`,`price_h`, `city`, `stan_car`, `descriptionn`, `photo`) VALUES ('$nomer_car','$nomer_nick', '$model', '$date_buy', '$probeg', '$price_h', '$city', '$stan_car', '$descriptionn', '$nn')");
    }
$ph_id1 = new ph_id($_FILES['photo1']['tmp_name'], $_FILES['photo1']['name'],$nomer_car);
$ph_id2 = new ph_id($_FILES['photo2']['tmp_name'], $_FILES['photo2']['name'],$nomer_car);
$ph_id3 = new ph_id($_FILES['photo3']['tmp_name'], $_FILES['photo3']['name'],$nomer_car);
            header("location:../menu.php");
}
?>