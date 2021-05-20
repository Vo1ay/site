<?php
    session_start();
    require_once "db/config.php";
       $checking =   mysqli_query($link,"SELECT * FROM person WHERE `nick`='$nick' AND `password`='$password'");
         $userdata = mysqli_fetch_array($checking);
         $userid =  $userdata['nomer_nick'];
         if($userid!=null)
        {
            $_SESSION["userid"] = $userid;
        }
    $userid = $_SESSION["userid"];
    if($userid!=NULL){
        $getdata = mysqli_query($link,"SELECT * FROM person WHERE nomer_nick='$userid'");
        $userdata = mysqli_fetch_array($getdata);

        $getdata1 = mysqli_query($link,"SELECT * FROM base_car WHERE nomer_nick='$userid'");
        $userdata1 = mysqli_fetch_array($getdata1);
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Reg car</title>
<link type="text/css" rel="stylesheet" href="menu.css"/>
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
	<h1 align="center">Реєстрація машини</h1>
    <form method="post" action="db/createa_car.php" enctype="multipart/form-data" action="Заповніть поле" required>
    <input type="password" name="nomer_nick" 	 class="secret"   placeholder="nomer_nick" value="<?php echo $userdata['nomer_nick'];?>"readonly><br>
    <input type="text" name="model" 	 class="input1"   placeholder="Модель" autocomplete="on"><br>
	<input type="date" name="date_buy"   class="input2"   placeholder="День покупки" value="День покупки"><br>
	<input type="text"name="probeg"	     class="input1"   placeholder="Пробіг"><br>
	<input type="text"name="price_h"     class="input1"   placeholder="Ціна/годину"><br>
	<input type="text"name="city"	 	 class="input1"   placeholder="Місто"><br>
	<input type="text"name="stan_car"    class="input1"   placeholder="Стан машини" autocomplete="on"><br>
	<textarea type="text" name="descriptionn" class="input3"   placeholder="Опис машини" autocomplete="on"></textarea><br><br>
	<h3 class="center">Фотографії машини: </h3><br>
	<input type="file" accept=".jpg, .jpeg, .png" name="photo" ><br>
    <input type="text" name="nomer_car" class="secret"   placeholder="nomer_car" value="<?php echo $userdata1['nomer_car'];?>"readonly><br>
		<input type="file" accept=".jpg, .jpeg, .png" name="photo1"><br>
		<input type="file" accept=".jpg, .jpeg, .png" name="photo2"><br>
		<input type="file" accept=".jpg, .jpeg, .png" name="photo3"><br>
        <input type="submit" id="id_button" value="Реєстрація">
    </form>
</div></div></div></div>
<header>
<div id="down">
<div>
	<div class="d_s">
		rchorey1@gmail.com
	</div>
	<div class="d_l" align="right">
		Копія зразка для оформлення орендування машини <a href="https://docs.google.com/document/d/1nPpxNNki0HFvPMIXQZC7wgrt4T2-e3XCKHvTqP-KbXQ/edit?usp=sharing">тут</a>.
	</div>
</div>
</div>
</header>
</form>
</body>
</html>