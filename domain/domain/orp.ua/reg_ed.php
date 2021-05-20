<?php
    session_start();
    require_once "db/config.php";
    $userid = $_SESSION["userid"];
    if($userid!=NULL){
        $getdata = mysqli_query($link,"SELECT * FROM person WHERE nomer_nick='$userid'");
        $userdata = mysqli_fetch_array($getdata);
    $userid1 = $_GET["ni"];
    $userid1 = mysqli_query($link,"SELECT * FROM person WHERE nomer_nick='$userid1'");}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
<link type="text/css" rel="stylesheet" href="menu.css"/>
</head>
<body>
<header>
<?php
    require_once "db/config.php";
    require_once "head.php";
?>
</header>
<div class=" ">
<div class="golov_l">
</div>
<div class="golov_m">
<div style = "border-radius: 25px 25px 25px 25px;" class = "blang">
<h2 align="center">Редагування профіль</h2>
    <form method="post" action="db/update_ak.php">
<form method="post" action="db/logincheck.php">
    <input type="text" 	   name="nomer_nick" 	    class="secret"   placeholder="Номер" value="<?php echo $userdata['nomer_nick'];?>"readonly> <br>
    <input type="text" 	   name="nick" 	    class="input1"   placeholder="Нік" value="<?php echo $userdata['nick'];?>"> <br>
	<input type="password" name="password"  class="input1"   placeholder="Пароль" autocomplete="on" value="<?php echo $userdata['password'];?>"><br>
	<input type="text" 	   name="name"	    class="input1"   placeholder="Ім'я" value="<?php echo $userdata['name'];?>"><br>
	<input type="text" 	   name="surname"   class="input1"   placeholder="Призвище" value="<?php echo $userdata['surname'];?>"><br>
	<input type="text"	   name="patronymic"class="input1"   placeholder="По-батьковськи" value="<?php echo $userdata['patronymic'];?>"><br>
	<input type="text"	   name="telephon"  class="input1"   placeholder="Телефон" value="<?php echo $userdata['telephon'];?>"><br>
	<input type="email"	   name="email"  	class="input1"   placeholder="Email" value="<?php echo $userdata['email'];?>"><br>
 <br>
        <input type="submit" id="id_button" value="Підтвердити зміни"><br>
    </form>
</div>
</form>
</div>
<div class="golov_r">
</div>
</div>
<form method="$POST" action="#">
	<div class="vvod">
</div>
<header>
<div id="down">
<div>
	<div class="d_s">
		rchorey1@gmail.com
	<div class="d_l" align="right">
		Копія зразка для оформлення орендування машини <a href="https://docs.google.com/document/d/1nPpxNNki0HFvPMIXQZC7wgrt4T2-e3XCKHvTqP-KbXQ/edit?usp=sharing">тут</a>.
	</div>
	</div>
</div>
</div>
</header>
</form>
</body>
</html>