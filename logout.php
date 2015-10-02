<?php
session_start();
if(!isset($_SESSION['id'])){
    header('location:vesti.php?error=NelegalanPristup');
}
else{
    session_destroy();
    header('location:vesti.php?error=Uspesno ste se odjavili!');
}
?>