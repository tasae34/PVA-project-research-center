<?php
session_start();
require('functions.php');
$idk=$_SESSION['id'];
postavikomentar($_POST['naslov'],$_POST['tekst'],$_POST['id'],$idk);
header('location:'.$_SERVER['HTTP_REFERER']);
?>