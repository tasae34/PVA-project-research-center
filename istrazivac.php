<?php
session_start();
require_once('includes/meni.php');
require('datafunctions/functions.php');
?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Istrazivac</title>
</head>
<body>
<?php
otvoriistrazivaca($_GET['id']);
?>

</body>
</html>