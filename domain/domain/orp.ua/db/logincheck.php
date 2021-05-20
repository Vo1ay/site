<?php
  session_start();
require_once "config.php";
    $userid = $_SESSION["userid"];
    if($userid!=NULL){
        $getdata = mysqli_query($link,"SELECT * FROM person WHERE nomer_nick='$userid'");
        $userdata = mysqli_fetch_array($getdata);
    }
if($_SERVER["REQUEST_METHOD"] == "POST")
    {
    $nick = $_POST["nick"];
    $password = $_POST["password"];
    if($nick == null || $password == null )
    {
        echo "Ви не ввели нік і/або пароль для входу.";
    }
    if($nick!= null )
    {
       $checking =   mysqli_query($link,"SELECT * FROM person WHERE `nick`='$nick' AND `password`='$password'");
         $userdata = mysqli_fetch_array($checking);
         $userid =  $userdata['nomer_nick'];
         if($userid!=null)
        {
            $_SESSION["userid"] = $userid;
            header("location:../menu.php");
        }    }}
?>