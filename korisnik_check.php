<?php
session_start();
include ('datafunctions/functions.php');
$db=connect();
$sql="SELECT * FROM users WHERE username='".$_POST['kor']."';";
$rez=mysqli_query($db,$sql);
if(mysqli_num_rows($rez)>0) echo true;
else echo false;
?>