<?php
session_start();
require_once('includes/meni.php');
require('datafunctions/functions.php');
?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Vest</title>
</head>
<body>
<?php
otvorivest($_GET['id']);
if(isset($_SESSION['tip'])){
if($_SESSION['tip']=='gost'){require ('includes/forma_kom.php');
}}
?>
<div id="komentari"></div>

</body>
<script src="javascript/jquery.js"></script>
<script>
    $( document ).ready(function() {
        var id=<?php echo $_GET['id']; ?>;
        $.post("datafunctions/kom_load.php?id="+id)
            .done(function(data){
                if(data){
                    $("#komentari").html(data);}
                else{
                    $("#komentari").html("<h1>Nije postavljen nijedan komentar!</h1>");
                }
            });
    })
</script>
</html>