<?php
session_start();
require('datafunctions/functions.php');
?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Vesti</title>
</head>
<body>

<?php

if(isset($_GET['error'])){
    echo '<h3>'.$_GET['error'].'</h3>';}
require_once('includes/meni.php');
echo '<h3>Vesti:</h3>';
prikazivesti();
?>
<div id="komentari"></div>
</body>
<script src="javascript/jquery.js"></script>
<script>
  /*  $( document ).ready(function() {
        $.post("datafunctions/kom_load.php")
            .done(function(data){
                if(data){
                    $("#komentari").html(data);}
                else{
                    $("#komentari").html("<h1>Doslo je do greske!</h1>");
                }
            });
        window.setInterval(komentari(),60000);
        alert("1");
    });*/
</script>
</html>