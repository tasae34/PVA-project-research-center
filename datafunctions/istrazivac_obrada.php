<?php
include('functions.php');
session_start();

if($_GET['akcija']=="okaci_vest"){
    $idk=$_SESSION['id'];
    postavivest($_POST['naslov'],$_POST['tekst'],$idk);
    header('location:'.$_SERVER['HTTP_REFERER']);
}

if($_GET['akcija']=="azuriraj_istrazivaca"){
    if(isset($_POST['id'])){
        $id=$_POST['id'];
    }
    else $id=$_SESSION['id'];
    azurirajistrazivaca($id,$_POST['ime'],$_POST['datum'],$_POST['zio'],$_POST['ref'],$_POST['slika']);
    echo $id;
    header('location:'.$_SERVER['HTTP_REFERER']);
}



?>