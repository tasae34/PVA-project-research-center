<?php
session_start();
include('includes/meni.php');
    if(isset($_GET['error'])){
echo '<h3>'.$_GET['error'].'</h3>';}
?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Prijava</title>
</head>
<body>
<form action="datafunctions/login_check.php" method="post">
 <hr>
 Korisnicko ime: <input type="text" name="korisnik"><br><hr>
 Lozinka: <input type="password" name="lozinka"> <br><hr>
<button>Prijavi se</button>
</form>
</body>
</html>