<?php
?>
<style>
    .meni{
        color:red;
        font-family: "times new roman";
        border: solid 1px blue;
        padding: 3px;
    }
</style>
<a class="meni" href="vesti.php">Vesti</a>
<a class="meni" href="oprojektu.php?ime=pozadinaprojekta">O projektu</a>
<a class="meni" href="istrazivaci.php">Istrazivaci</a>
<a class="meni" href="partneri.php?ime=partneri">Partneri</a>
<a class="meni" href="dokumenti.php">Dokumenti</a>
<a class="meni" href="kontakt.php">Kontakt</a>
<?php
if(isset($_SESSION['id']) && $_SESSION['tip']=="istrazivac") {echo '<a class="meni" href="istrazivanje.php">Istrazivanje</a>';}
if(isset($_SESSION['id']) && $_SESSION['tip']=="admin") {echo '<a class="meni" href="admin.php">Admin</a>';}


if(!isset($_SESSION['id'])){
    echo '<a class="meni" href="login.php">Prijava</a>';
}
else {
    echo '<a class="meni" href="logout.php">Odjava</a>';
}


?>