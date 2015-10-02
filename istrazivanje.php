<?php
session_start();
if($_SESSION['tip']!="istrazivac"){header('location:vesti.php?error=NedozvoljenPristup');}

require('includes/meni.php');
require('datafunctions/functions.php');
$db=connect();

?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Istrazivanje</title>
</head>
<body>

<?php
$sql1='SELECT * FROM users WHERE id='.$_SESSION['id'].';';
$rez1=mysqli_query($db,$sql1);
if(mysqli_num_rows($rez1)>0){
    $red=mysqli_fetch_assoc($rez1);
    echo '<h2>Dobrodosli '.$red['ime_i_prezime'].'</h2><hr>';
}
echo '<h3>Okaci vest:</h3>';
?>

<form action="datafunctions/istrazivac_obrada.php?akcija=okaci_vest" method="post">
    Naslov vesti: <input type="text" required="yes" name="naslov"/><br>
    Tekst vesti:<br> <textarea name="tekst" required="yes" cols="100" rows="20"></textarea><br>
    <button>Unesi vest</button>

</form>
<hr>
<h3>Izmeni svoje podatke: </h3>


<form action="datafunctions/istrazivac_obrada.php?akcija=azuriraj_istrazivaca" method="post">
    Unesite ime pod kojim hocete da budete predstavljeni: <input type="text" required="yes" name="ime"><br>
    Unesite vas datum rodjenja: <input type="date" required="yes" name="datum"><br>
    Unesite vase zanimanje i obrazovanje(short bio):<br> <textarea name="zio" required="yes" cols="30" rows="10"></textarea><br>
    Unesite vase publikacije od znacaja:<br> <textarea name="ref" required="yes" cols="30" rows="10"></textarea><br>
    Unesite lokaciju vase slike: <input type="text" required="yes" name="slika"/><br>
    <button>Azuriraj podatke</button>
</form>

<h3>Okaci datoteku:</h3>

<form action="datafunctions/datoteka_post.php" method="post" enctype="multipart/form-data">
    Fajl: <input type="file" name="file" required="yes" id="file"/><br>
    <input type="submit" name="Okaci" value="Okaci">
</form>

</body>
</html>