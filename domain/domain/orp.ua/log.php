<!DOCTYPE html>
<html>
<head>
	<title>Log in</title>
<link type="text/css" rel="stylesheet" href="menu.css"/>
</head>
<body>
<header>
<?php
    require_once "db/config.php";
    require_once "head.php";
?>
</header>
<form method="post" action="db/logincheck.php">
<div style = "border-radius: 25px 25px 25px 25px;" class = "blang">
<h1 align="center">Вхід</h1>
<input type="text"     class="input1" id="nick"	   name="nick" 	   placeholder="Нік">
<input type="password" class="input1" id="password" name="password" placeholder="Пароль" autocomplete="on">
<br><br>
<a id=" " href="reg.php">Зареєструватися</a>
<br><br>
<input type="submit" id="id_button" name="button" value="Вхід" class="btn-login"></
 </form>
</div>
</form>
<form method="$POST" action="#">
	<div class="vvod">
</div>
<header>
<div id="down">
	<div class="d_s">
		rchorey1@gmail.com
	<div class="d_l" align="right">
		Копія зразка для оформлення орендування машини <a href="https://docs.google.com/document/d/1nPpxNNki0HFvPMIXQZC7wgrt4T2-e3XCKHvTqP-KbXQ/edit?usp=sharing">тут</a>.
	</div>
	</div>
</div>
</header>
</form>
</body>
</html>