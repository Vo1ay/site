<?php
    session_start();
    require_once "db/config.php";
    $userid = $_SESSION["userid"];
    if($userid!=NULL){
        $getdata = mysqli_query($link,"SELECT * FROM person WHERE nomer_nick='$userid'");
        $userdata = mysqli_fetch_array($getdata);}
    $userid1 = $_SESSION["userid"];
    if($userid1!=NULL){
        $getdata1 = mysqli_query($link,"SELECT * FROM base_car WHERE nomer_nick='$userid1'");
        $userdata1 = mysqli_fetch_array($getdata1);}
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $userdata['nick'];?></title>
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

<div  class="f_r" >
	<div class="id_ak">

	<div id="inl">
	<div id="menu_width">
	<div class="ak_menu">
	<div class="ak_in_manu">
		<div class="ak_stav">
			<p class="ak_STAV">
				Нік: <?php echo $userdata['nick'];?>
				<a class="ak_stav">
				<br>Ім'я:
				<?php echo $userdata['name'];?>
				<br>Призвище:
				<?php echo $userdata['surname'];?>
				<br>Дата покупки:
				<?php echo $userdata['patronymic'];?>
				<br>Телефон:
				<?php echo $userdata['telephon'];?>
				<br>Електронна пошта:
				<?php echo $userdata['email'];?>
				</a>
			</p>
<br><br><br><br><br><br>
		</div>
</div>
<a href="reg_ed.php?ni=<?= $userdata1[1]?>">
<input type="button" id="ed_button" value="Редагувати"></a>
</div>
<div  class="">
<?php

	if($userdata1['nomer_nick']!=null)
	{

    $userid1 = $_SESSION["userid"];
    if($userid1!=NULL){
        $getdata1 = mysqli_query($link,"SELECT * FROM base_car WHERE nomer_nick='$userid1'");
        $userdata1 = mysqli_fetch_array($getdata1);

?>

	<div id="inl">
	<div class="menu">
	<div class="in_manu">
		<div class="stav">
		<img src="images/<?= $userdata1[photo]?>">
		<div class="stav">
			<p class="STAV"><?= $userdata1['model']?><a class="stav"></a>
		<div align="left" class="stav">
<br><br><br>

<div class="discr">
Місто: <?= $userdata1[city]?><br>
Короткий стан машини: <?= $userdata1[stan_car]?><br>


</div>
		<div class="stav_butt">
		<?= $userdata1[price_h]?>/год
        <a href="ak_car_n.php?ni=<?= $userdata1[1]?>"><input type="button" id="id_button" value="Відкрити"></a>
		</div>
		</div>

		</div></div></div></div>
	</div>
<?php
	}
?>
<?php
	}
?>
</div></div></div></div></div></div>
<form method="$POST" action="#">
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