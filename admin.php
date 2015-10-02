<?php
session_start();
if($_SESSION['tip']!="admin"){header('location:vesti.php?error=NedozvoljenPristup');}
require('includes/meni.php');
require('datafunctions/functions.php');
$db=connect();
$sql1='SELECT * FROM users WHERE id='.$_SESSION['id'].';';
$rez1=mysqli_query($db,$sql1);
if(mysqli_num_rows($rez1)>0){
    $red=mysqli_fetch_assoc($rez1);
    if($red['ime_i_prezime']==NULL){echo '<h2>Dobrodosli '.$red['username'].'</h2><hr>';}
    else echo '<h2>Dobrodosli '.$red['ime_i_prezime'].'</h2><hr>';
}echo '<h3>Okaci vest:</h3>';
?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Admin</title>
</head>
<body>

<form action="datafunctions/admin_obrada.php?akcija=vest_post" method="post">
    Naslov vesti: <input type="text"  name="naslov" required=""/><br>
    Tekst vesti:<br> <textarea name="tekst" required="yes" cols="100" rows="20"></textarea><br>
    <button>Unesi vest</button>

</form>
<hr>

<h3>Svi komentari:</h3><hr>

<?php

$sql="SELECT * FROM komentari ORDER BY idkom DESC;";
$rez=mysqli_query($db,$sql);
while($red=mysqli_fetch_assoc($rez)){
    echo '<hr>';
    echo ' NASLOV: '.$red['naslov'];
    echo ' TEKST: '.$red['tekst'];
    echo ' AUTOR: '.$red['autor'];
    echo ' DATUM: '.$red['datum'];
    echo '<a href="datafunctions/admin_obrada.php?akcija=obrisi_kom&id='.$red['idkom'].'">   Obrisi komentar</a>';
}
echo '<hr>';
?>

<h3>Azuriraj sadrzaj stranica:</h3>

<form action="datafunctions/admin_obrada.php?akcija=stranica_azuriraj" method="post">
    Izaberite stranicu koju zelite da azurirate: <select name="ime" id="ime">
    <?php
    $sql2="SELECT * FROM stranice;";
    $rez2=mysqli_query($db,$sql2);
    while($red2=mysqli_fetch_assoc($rez2)){
    echo'<option value="'.$red2['ime'].'">'.$red2['ime'].'</option>';
    }
    ?>
    </select><br>
    Unesite potpun HTML kod za stranicu:<br>
    <textarea name="html" cols="50" required="yes" rows="20"></textarea><br>
    <button>Azuriraj</button>
</form>
<hr>


<h3>Istrazivaci:</h3>

<h3>Azuriraj istrazivaca:</h3>
<form action="datafunctions/admin_obrada.php?akcija=azuriraj_istrazivaca" method="post">
    Izaberite istrazivaca kog zelite da azurirate:
   <select name="id" id="id">
    <?php
    $sql3="SELECT * FROM users WHERE tip='istrazivac';";
    $rez3=mysqli_query($db,$sql3);
    while($red3=mysqli_fetch_assoc($rez3)){
        echo'<option value="'.$red3['id'].'">'.$red3['ime_i_prezime'].'</option>';
    }
    ?>
    </select><br>
    Unesite ime istrazivaca: <input type="text" required="yes" name="ime"><br>
    Unesite datum rodjenja istrazivaca: <input type="date" required="yes" name="datum"><br>
    Unesite zanimanje i obrazovanje(short bio):<br> <textarea name="zio" required="yes" cols="30" rows="10"></textarea><br>
    Unesite publikacije od znacaja:<br> <textarea name="ref" required="yes" cols="30" rows="10"></textarea><br>
    Unesite lokaciju slike: <input type="text" required="yes" name="slika"/><br>
    <button>Azuriraj podatke</button>
</form>

<h3>Unesi istrazivaca:</h3>
<form action="datafunctions/admin_obrada.php?akcija=unesi_istrazivaca" method="post">
    Unesite username istrazivaca: <input type="text" required="yes" name="username"><br>
    Unesite password istrazivaca: <input type="text" required="yes" name="password"><br>
    Unesite ime istrazivaca: <input type="text" required="yes" name="ime"><br>
    Unesite datum rodjenja istrazivaca: <input type="date" required="yes" name="datum"><br>
    Unesite zanimanje i obrazovanje(short bio):<br> <textarea name="zio" required="yes" cols="30" rows="10"></textarea><br>
    Unesite publikacije od znacaja:<br> <textarea name="ref" required="yes" cols="30" rows="10"></textarea><br>
    Unesite lokaciju slike: <input type="text" required="yes" name="slika"/><br>
    <button>Unesi istrazivaca</button>
</form>

<h3>Obrisi istrazivaca:</h3>

<form action="datafunctions/admin_obrada.php?akcija=obrisi_istrazivaca" method="post">
    Izaberite istrazivaca kog zelite da obrisete:
    <select name="id1" id="id1">
        <?php
        $sql3="SELECT * FROM users WHERE tip='istrazivac';";
        $rez3=mysqli_query($db,$sql3);
        while($red3=mysqli_fetch_assoc($rez3)){
            echo'<option value="'.$red3['id'].'">'.$red3['ime_i_prezime'].'</option>';
        }
        ?>
    </select><br>
    <button>Obrisi istrazivaca</button>
</form>
<hr>

<h3>Korisnici(Admin/Gost):</h3>
<h3>Dodaj korisnika:</h3>
<form action="datafunctions/admin_obrada.php?akcija=dodaj_korisnika" method="post">
    Unesite korisnicko ime novog korisnika: <input type="text" required="yes" name="username" id="kor"/><div id="info"></div><br>
    Unesite lozinku novog korisnika: <input type="text" required="yes" name="password"/><br>
    Unesite tip novog korisnika: <select name="tip" id="">
        <option value="admin">admin</option>
        <option value="gost">gost</option>
    </select><br>
    <button>Unesi korisnika</button>
</form>
<h3>Obrisi korisnika</h3>

<form action="datafunctions/admin_obrada.php?akcija=obrisi_korisnika" method="post">
    Izaberite korisnika kog zelite da obrisete:
    <select name="id2" id="id2">
        <?php
        $sql3="SELECT * FROM users WHERE tip<>'istrazivac';";
        $rez3=mysqli_query($db,$sql3);
        while($red3=mysqli_fetch_assoc($rez3)){
            echo'<option value="'.$red3['username'].'">'.$red3['username'].'</option>';
        }
        ?>
    </select><br>
    <button>Obrisi korisnika:</button>
</form>
<h3>Promeni lozinku korisniku:</h3>

<form action="datafunctions/admin_obrada.php?akcija=promeni_lozinku" method="post">
    Izaberite korisnika kome zelite da promenite lozinku:
    <select name="id3" id="id3">
        <?php
        $sql3="SELECT * FROM users WHERE tip<>'istrazivac';";
        $rez3=mysqli_query($db,$sql3);
        while($red3=mysqli_fetch_assoc($rez3)){
            echo'<option value="'.$red3['username'].'">'.$red3['username'].'</option>';
        }
        ?>
    </select><br>
    Unesite novu lozinku: <input type="text" required="yes" name="pass"/><br>
    <button>Promeni lozinku</button>
</form>

<h3>Okaci datoteku:</h3>

<form action="datafunctions/datoteka_post.php" method="post" enctype="multipart/form-data">
    Fajl: <input type="file" name="file" required="yes" id="file"/><br>
    <input type="submit" name="Okaci" value="Okaci">
</form>



</body>
<script src="javascript/jquery.js"></script>
<script>
    $("#kor").keyup(function(){


        $.post("korisnik_check.php",{kor:$(this).val()})
            .done(function(data){
                $("#info").html("");
                if(data) {$('#info').html("<p>KORISNICKO IME JE ZAUZETO</p>");}
                else {$('#info').html("<p>KORISNICKO IME NIJE ZAUZETO</p>");}
            });
    });
</script>

</html>