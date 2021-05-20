<?php
error_reporting(0);
define('DB_SERVER', '127.0.0.1');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'orp.ua');
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
class ph_id
{
    public function __construct($photo1,$photo11, $id_img1)
    {
		$conn = mysqli_connect("127.0.0.1", "root", "", "orp.ua");
        $this->photo1 = $photo1;
        $this->photo11 = $photo11;
		$this->id_img1 = $id_img1;
    	if(move_uploaded_file($photo1,'../images/'.$photo11))
		{
		mysqli_query($conn,"UPDATE `img` SET `name_img` = '$photo11' WHERE `img`.`id_img` = '$id_img1';");
		$id_img = rand(1, 10000);
		$checking = mysqli_query($conn,"SELECT * FROM img WHERE id_img='$id_img'");
		$checkcount = mysqli_num_rows($checking);
		for ($i=0; $i < 1; $i++)
		{
		if ($checkcount!=0)
		{
		$id_img = rand(1, 10000);
        $i--;
        }
		}
		if(mysqli_query($conn,"INSERT INTO `img` (`id_img`,`nomer_car`,`name_img`) VALUES ('$id_img','$id_img1','$photo11');"))
		{
		}
		}
    }
}
?>