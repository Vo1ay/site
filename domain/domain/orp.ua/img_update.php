<?php
  session_start();
if($_SERVER["REQUEST_METHOD"] == "POST"){
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "orp.ua";

$ph   = "fd";
$photo1  = $_POST["photo1"];
$photo2  = $_POST["photo2"];
$photo3  = $_POST["photo3"];
$id_img1 = $_POST["id_img1"];
$id_img2 = $_POST["id_img2"];
$id_img3 = $_POST["id_img3"];
#$_POST["photo1"], $_POST["photo2"], $_POST["photo3"]
#$_POST["id_img1"],$_POST["id_img2"],$_POST["id_img2"]
 $photo  = array($photo1, $photo2, $photo3);
 $id_img = array($id_img1,$id_img2,$id_img3);
 $photoX = array($photo1,$photo2,$photo3);
 $id_imgX = array('$id_img1','$id_img2','$id_img3');
for ($i=0; $i < 3; $i++) {
    echo " $photo[$i]<br>";
}
#--------------

echo $ph;
echo $photo[0];

if(move_uploaded_file($_FILES[$_POST[$photo1]]['tmp_name'], __DIR__.'\images\\'.$_FILES[$_POST[$photo1]]['name']))
{

    echo "<br> + $photo[$i] <br>";
        echo $_FILES[$_POST[$photo1]]['tmp_name'].'<br>';
        echo $_FILES[$_POST[$photo1]]['name'];/**/
}
else
{
    echo "- 2";/**/
        echo $_FILES[$_POST[$photo1]]['tmp_name'].'<br>';
        echo $_FILES[$_POST[$photo1]]['name'];/**/
}

/*
for ($i=0; $i < 3; $i++) {
if(move_uploaded_file($_FILES[$photo[$i]]['tmp_name'], __DIR__.'\images\\'.$_FILES[$photo[$i]]['name']))
{

    echo " + $photo[$i] <br>";
    echo $_FILES[$photo[$i]]['tmp_name'].'<br>';
    echo $_FILES[$photo[$i]]['name'];
}
else
{
    echo " - $photo[$i] <br>";
    echo $_FILES[$photo[$i]]['tmp_name'].'<br>';
    echo $_FILES[$photo[$i]]['name'];
}
}*/
#------------------
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

/*
    $photo1 = '1.jpgee';
    $photo2 = '2.jpg';
    $photo3 = '3.jpg';
    $id_img1 = '88';
    $id_img2 = '89';
    $id_img3 = '90';
$sql = "UPDATE img (nomer_car, name_img)
SET
('$nomer_car', '$photo1' ),
('$nomer_car', '$photo2' ),
('$nomer_car', '$photo3' ) WHERE `base_car`.`nomer_nick` = '$nomer_nick'";
*/

#header("location:../menu.php");
for ($i=0; $i < 3; $i++) {
    echo " $photo[$i]<br>";
    echo " $id_img[$i]<br>";
if (mysqli_query($conn,
"
UPDATE `img` SET `name_img` = '$photo[$i]' WHERE `img`.`id_img` = '$id_img[$i]';
"
)) {
    echo " + <br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}

/*
  session_start();
require_once "config.php";
if($_SERVER["REQUEST_METHOD"] == "POST"){

    $nomer_nick = $_POST["nomer_car"];
    $photo = $_POST["name_img"];
    $nomer_nick2 = $_POST["nomer_car2"];
    $photo2 = $_POST["name_img2"];
    $nomer_nick3 = $_POST["nomer_car3"];
    $photo3 = $_POST["name_img3"];

    */
            /*
$con = new mysqli("127.0.0.1", "root", "", "orp.ua");
        $sql = "INSERT INTO `img` (`nomer_car`, `name_img` ) VALUES ('1', 'img' )";
        $sql = "INSERT INTO `img` (`nomer_car`, `name_img` ) VALUES ('1', '1img' )";
        $sql = "INSERT INTO `img` (`nomer_car`, `name_img` ) VALUES ('1', '2img' )";

if($con->mysqli_query($sql) === TRUE){
    echo "+";
}
$con->close();
        header("location:dashboard.php");
            header("location:../menu.php");
 $sql = "INSERT INTO `img` (`id_img`, `nomer_car`, `name_img`) VALUES
(NULL, '52', '8978b76752274abc80f57eae90a52225.jpg'),
(NULL, '52', '1574770966.jpg'),
(NULL, '52', 'tesla.jpg');"

if($con->query($sql) === TRUE){
    echo "created";
}
$con->close();

        mysqli_query($link,"INSERT INTO `img` (`id_img`, `nomer_car`, `name_img`) VALUES (NULL, '52', '8978b76752274abc80f57eae90a52225.jpg'), (NULL, '52', '1574770966.jpg'), (NULL, '52', 'tesla.jpg');");


        header("location:dashboard.php");
            header("location:../menu.php");*/
}
?>