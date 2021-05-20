<?php
    session_start();
    require_once "db/config.php";
    $userid = $_SESSION["userid"];
    if($userid!=NULL){
        $getdata = mysqli_query($link,"SELECT * FROM person WHERE nomer_nick='$userid'");
        $userdata = mysqli_fetch_array($getdata);
    }
    $nomer_n = $_GET["ni"];
        $n_nick = mysqli_query($link,"SELECT * FROM `person` WHERE `nomer_nick` ='$nomer_n'");
        $n_nick = mysqli_fetch_array($n_nick);

        $care = mysqli_query($link,"SELECT * FROM `base_car` WHERE `nomer_nick` ='$nomer_n'");
        $care = mysqli_fetch_array($care);

        $ca = $care['nomer_car'];
        $get_img = mysqli_query($link,"SELECT * FROM `img` WHERE `nomer_car` ='$ca'");
        $get_img = mysqli_fetch_array($get_img);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Редагування машини</title>
<link type="text/css" rel="stylesheet" href="menu.css"/>
<link rel="stylesheet" href="script.js"/>
<script src="script.js">
</script>
</head>
<body>
<header>
<?php
    require_once "db/config.php";
    require_once "head.php";
?>
</header>
<div class="golov_m">
<div style = "border-radius: 25px 25px 25px 25px;" class = "blang">
	<h1 align="center">Редагування машини</h1>
    <form method="post" action="db/update_car.php" enctype="multipart/form-data" action="Заповніть поле" required>
    <input type="text" name="nomer_car" 	 class="secret"   placeholder="nomer_car"value="<?php echo $care['nomer_car'];?>"readonly> <br>
    <input type="text" name="model" 	 class="input1"   placeholder="Модель" autocomplete="on"value="<?php echo $care['model'];?>"> <br>
	<input type="date" name="date_buy"   class="input2"   placeholder="День покупки" value="<?php echo $care['date_buy'];?>"> <br>
	<input type="text"name="probeg"	     class="input1"   placeholder="Пробіг" value="<?php echo $care['probeg'];?>"> <br>
	<input type="text"name="price_h"     class="input1"   placeholder="Ціна/годину" value="<?php echo $care['price_h'];?>"> <br>
	<input type="text"name="city"	 	 class="input1"   placeholder="Місто" value="<?php echo $care['city'];?>"> <br>
	<input type="text"name="stan_car"    class="input1"   placeholder="Стан машини" autocomplete="on" value="<?php echo $care['stan_car'];?>">
    <br>
	<textarea type="description" name="descriptionn" class="input3"   placeholder="Опис машини" autocomplete="on"><?php echo $care['descriptionn'];?></textarea>
    <br><br>
    <h3 class="center">Фотографії машини</h3><br>
    <input type="file" accept=".jpg, .jpeg, .png" name="photo"><br><br>
    <input type="file" accept=".jpg, .jpeg, .png" name="photo1"/>
    <input type="text" name="id_img1" class="secret"   placeholder="nomer_car1"value="<?php
    echo $get_img['id_img'];
    ?>"readonly>
    <br>
    <input type="file" accept=".jpg, .jpeg, .png" name="photo2"/>
    <input type="text" name="id_img2" class="secret"   placeholder="nomer_car2"value="<?php
    echo $get_img['id_img']+1;
    ?>"readonly>
    <br>
    <input type="file" accept=".jpg, .jpeg, .png" name="photo3"/>
    <input type="text" name="id_img3" class="secret"   placeholder="nomer_car3"value="<?php
    echo $get_img['id_img']+2;
    ?>"readonly>
    <br>
    <input type="submit" id="id_button" name="button" value="Підтвердити"><br>
    </form>
</div></div></div></div></div>
<form method="$POST" action="#">
	<div class="vvod"></div>
<header>
<div id="down">
<div>
	<div class="d_s">
		rchorey1@gmail.com
	</div>
    <div class="d_l" align="right">
    Копія зразка для оформлення орендування машини <a href="https://docs.google.com/document/d/1nPpxNNki0HFvPMIXQZC7wgrt4T2-e3XCKHvTqP-KbXQ/edit?usp=sharing">тут</a>.
    </div></div></div>
</header>
</form>
</body>
</html>