<?php
session_start();
include('functions.php');
$file=fopen($_POST['id'],"r");
$tekst='';
while($s=fgets($file)){
    $tekst.=$s."<br>";
}
echo $tekst;

?>

