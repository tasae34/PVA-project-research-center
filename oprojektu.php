<?php
session_start();
require_once('includes/meni.php');
echo '<hr>';
require_once('includes/podmeni.php');
require('datafunctions/functions.php');
prikazistranicu($_GET['ime']);
?>