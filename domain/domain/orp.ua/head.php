<nav>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Serif&display=swap" rel="stylesheet">
<?php
    session_start();
    require_once "db/config.php";
    $nick =  $userdata['nomer_nick'];
    if($nick!=null)
    {
    $_SESSION["nick"] = $nick;
    }
    $m_nick = $_SESSION["nick"];
    if($m_nick!=NULL){
        $getdata = mysqli_query($link,"SELECT * FROM person WHERE nomer_nick='$m_nick'");
        $getdata = mysqli_fetch_array($getdata);

        $getdata1 = mysqli_query($link,"SELECT * FROM base_car WHERE nomer_nick='$m_nick'");
        $getdata1 = mysqli_fetch_array($getdata1);
    }
?>
<div class="header11">
<div class="header1">
  <div class="f_l">
    <a  href="menu.php">Головна</a>
  </div>
  <div class="f_r">
  </div>
  <div class="f_r" >
    <?php    if($userdata !=  null){    	?>
<div class="dropdown"  >
  <a class="dropbtn"><?php echo $userdata['nick'];?></a>
    <div class="dropdown-content">
      <a href="ak.php?ni=<?= $userdata['nomer_nick']?>">Акаунт</a>
    <?php    if( $getdata1['model'] != null){      ?>
      <a  href="ak_car.php?ni=<?= $userdata['nomer_nick']?>">Ваша машина </a>
    <?php    }    else {    ?>
      <a  href="car.php">Ваша машина</a>
    <?php    }    ?>
      <a href="db/logout.php"> Вихід </a>
    </div>
</div>
    <?php    }    else{    ?>
  <a  href="log.php"><?php echo $userdata['nick']; ?> Вхід</a>
    <?php    }    ?>
  </div>
</div>
</div>
</div>
</div>
</nav>