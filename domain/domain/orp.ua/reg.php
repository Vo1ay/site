<?php
    session_start();
    require_once "db/config.php";
    $userid = $_SESSION["userid"];
    if($userid!=NULL){
        $getdata = mysqli_query($link,"SELECT * FROM person WHERE nomer_nick='$userid'");
        $userdata = mysqli_fetch_array($getdata);
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Реєстрація</title>
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
<h1 align="center">Реєстрація</h1>
    <form method="post" action="db/createaccount.php">

    <input type="text" 	   name="nick" 	    class="input1"   placeholder="Нік"><br>
	<input type="password" name="password"  class="input1"   placeholder="Пароль" autocomplete="on"><br>
	<input type="text" 	   name="name"	    class="input1"   placeholder="Ім'я"><br>
	<input type="text" 	   name="surname"   class="input1"   placeholder="Призвище"><br>
	<input type="text"	   name="patronymic"class="input1"   placeholder="По-батьковськи"><br>
	<input type="text"	   name="telephon"  class="input1"   placeholder="Телефон"><br>
	<input type="email"	   name="email"  	class="input1"   placeholder="Email"><br>
<br>
<a id=" " href="log.php">Вхід</a>
<br><br>
        <input type="submit" id="id_button" value="Реєстрація"><br>
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