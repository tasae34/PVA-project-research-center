<?php
session_start();
require_once('includes/meni.php');
?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Kontakt</title>
    <style>
        h4{
            color: red;
        }
        h5{
            color:blue;
        }
    </style>
</head>
<body>
   <h2>Kontaktirajte nas na:</h2>
    <h4>Rukovodilac projekta - rukovodilac@mail.com</h4>
    <h4>Menadzment projekta - menadzment@mail.com</h4>
    <h4>Webmaster projekta - webmaster@mail.com</h4>
    <hr>
    <h5>IME:</h5> <input type="text"><br>
    <h5>NASLOV:</h5> <input type="text"><br>
    <h5>E-MAIL ADRESA:</h5> <input type="text"><br>
    <h5>PORUKA: </h5><textarea name="poruka" id="" cols="30" rows="10"></textarea><br>
    <button>POSALJI</button>
</body>
</html>