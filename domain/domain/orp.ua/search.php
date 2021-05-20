<?php
    session_start();
    require_once "db/config.php";
    $userid =  $userdata['nomer_nick'];
    if($userid!=null)
    {
    $_SESSION["userid"] = $userid;
    }
    $userid = $_SESSION["userid"];
    if($userid!=NULL){
        $getdata = mysqli_query($link,"SELECT * FROM person WHERE nomer_nick='$userid'");
        $userdata = mysqli_fetch_array($getdata);
        $getdata = mysqli_query($link,"SELECT * FROM person WHERE nomer_nick='$userid'");
        $userdata = mysqli_fetch_array($getdata);
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Пошук: <?php echo $_GET['search']; ?></title>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Serif&display=swap" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="menu.css"/>
<link rel="stylesheet" href="script.js"/>
</head>
<body>
<header>
<?php
    require_once "db/config.php";
    require_once "head.php";
?>
</header>
<div  class="golov">
	<div class="f_l">
		<div id="inl">
			<div class="list_l">
<h3 align="center">Пошук
<form method="get" action="search.php">
<input type="search" name="model" class="sear"placeholder="Пошук...">
<input type="submit" value="&#128269;">
</form>
</h3>
</div></div>
</div>
<div  class="f_r">
<div class="id_ak">
<?php
$sear = $_GET['model'];
$get = $_GET['model'];
	$car = mysqli_query($link,"SELECT * FROM base_car WHERE model LIKE '%$get%'");
	$car = mysqli_fetch_all($car);
	foreach($car as $cars){
        print_r($se['model'].$se['nomer_car']);
?>
	<div id="inl">
	<div class="menu">
	<div class="in_manu">
		<div class="stav">
		<img src="images/<?= $cars[9]?>">
		<div class="stav">
			<p class="STAV"><?= $cars[2]?><a class="stav"> <?= $userdata['nick']?></a>
		<div align="left" class="stav">
<br><br><br>
<div class="discr">
Місто: <?= $cars[6]?><br>
Короткий стан машини: <?= $cars[7]?><br>
</div>
		<div class="stav_butt">
		<?= $cars[5]?>/год
        <a href="ak_car_n.php?ni=<?= $cars[1]?>"><input type="button" id="id_button" value="Відкрити"></a>
		</div></div></div></div></div></div>
	</div>
<?php
	}
?>
</div></div></div></div></div></div></div></div>
<br><br><br><br><br><br>
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