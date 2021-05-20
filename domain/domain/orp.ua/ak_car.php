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

        $nomer_car = $care['nomer_car'];
        $nom = mysqli_query($link,"SELECT * FROM `img` WHERE `nomer_car` ='$nomer_car'");
        $nom = mysqli_fetch_array($nom);
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $care['model'];echo' - '; echo $n_nick['name'];?></title>
<link  type="text/css" rel="stylesheet" href="menu.css"/>
</head>
<body>
<header>

<?php
    require_once "db/config.php";
    require_once "head.php";
?>
</header>
<div  class="golov" >
	<div class="f_l" >
	<div class="id_ak">
		<div id="inl">
		<div class="ava">
		<img src="images/<?= $care['photo']?>">
		</div>
		<div>
    <?php
    if($userdata == null){
      ?>
      <input align="center" type="button" value=" /год" class="ak_stav_butt">
    <?php
    }
    else{
    ?>
	<input align="center" type="button" value="<?php echo $care['price_h'];?>/год" class="ak_stav_butt">
    <?php
    }
    ?>
</div></div></div></div>
	<div  class="f_r" >
	<div class="id_ak">
	<div id="inl">
	<div class="menu">
	<div class="ak_menu">
	<div class=" ">
		<div class="ak_stav">
			<p class="ak_STAV">
				<?php echo $care['model'];?>
				<div class="ak_stav">
				<br><br><br>Ім'я власника:
				<?php echo $n_nick['name'];?>
				<br>Телефон власника:
				<?php echo $n_nick['telephon'];?>
				<br>Місто:
				<?php echo $care['city'];?>
				<br>Дата покупки:
				<?php echo $care['date_buy'];?>
				<br>Пробіг:
				<?php echo $care['probeg'];?>
				<br>Короткий стан машини:
				<?php echo $care['stan_car'];?>
				</div>
			</p>
<br><br>
<a href="car_ed.php?ni=<?= $n_nick['nomer_nick']?>">
<input type="button" id="ed_button" value="Редагувати"></a>
</div></div></div></div></div>
<div  class="galerea1">
	<div class="inp">
	<div class="out">
<?php
	$car = mysqli_query($link,"SELECT * FROM img WHERE `nomer_car` = $nomer_car ");
	$car = mysqli_fetch_all($car);
	foreach($car as $cars){
?>
<img class="list_img" src="../images/<?= $cars[2]?>"><br>
<?php
	}
?>
</div></div></div>
<br>
<div  class="ak_discr">
			<div class="ak_stav">
<br>Детальний опис машини:
<?php
 echo $care['descriptionn'];
?>
</div></div></div></div></div></div>
<form method="$POST" action="#">
	<div class="vvod">
</div>
<header>
<div id="down">
<div>
	<div class="d_s">
		<p class="p_down">rchorey1@gmail.com</p>
	</div>
	<div class="d_l" align="right">
		<p class="p_down">Копія зразка для оформлення орендування машини <a href="https://docs.google.com/document/d/1nPpxNNki0HFvPMIXQZC7wgrt4T2-e3XCKHvTqP-KbXQ/edit?usp=sharing">тут</a>.</p>
	</div>
</div>
</div>
</header>
</form>
</body>
</html>