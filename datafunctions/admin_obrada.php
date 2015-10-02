<?php
session_start();
include('functions.php');

if($_GET['akcija']=="vest_post"){
    $idk=$_SESSION['id'];
    postavivest($_POST['naslov'],$_POST['tekst'],$idk);
    header('location:'.$_SERVER['HTTP_REFERER']);
}

if($_GET['akcija']=="obrisi_kom"){
    $id=$_GET['id'];
    obrisikomentar($id);
    header('location:'.$_SERVER['HTTP_REFERER']);
}

if($_GET['akcija']=="stranica_azuriraj"){
    azurirajstranicu($_POST['ime'],$_POST['html']);
    header('location:'.$_SERVER['HTTP_REFERER']);
}

if($_GET['akcija']=="unesi_istrazivaca"){
    $tip='istrazivac';
    unesiistrazivaca($_POST['username'],$_POST['password'],$tip,$_POST['ime'],$_POST['datum'],$_POST['zio'],$_POST['ref'],$_POST['slika']);
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

if($_GET['akcija']=="obrisi_istrazivaca"){
    obrisiistrazivaca($_POST['id1']);
    header('location:'.$_SERVER['HTTP_REFERER']);
}

if($_GET['akcija']=="dodaj_korisnika"){
    unesikorisnika($_POST['username'],$_POST['password'],$_POST['tip']);
    header('location:'.$_SERVER['HTTP_REFERER']);

}

if($_GET['akcija']=="promeni_lozinku"){
    promenilozinku($_POST['id3'],$_POST['pass']);
    header('location:'.$_SERVER['HTTP_REFERER']);

}

if($_GET['akcija']=="obrisi_korisnika"){
    obrisikorisnika($_POST['id2']);
    header('location:'.$_SERVER['HTTP_REFERER']);
}



















?>