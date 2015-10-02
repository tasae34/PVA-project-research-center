<?php
session_start();
require('functions.php');
if(isset($_POST['korisnik']) && isset($_POST['lozinka']) && login($_POST['korisnik'],$_POST['lozinka']))
{
    if($_SESSION['tip']=="admin") header('location:../admin.php');
    if($_SESSION['tip']=="istrazivac") header('location:../istrazivanje.php');
    if($_SESSION['tip']=="gost") header('location:../vesti.php?error=Dobrodosli!');
}
else header('location:../login.php?error=PogresniParametri');
?>