<?php
session_start();
require('datafunctions/functions.php');
?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Istrazivaci</title>
</head>
<body>
<?php
require_once('includes/meni.php');
echo '<h3>Istrazivaci:</h3>';
prikaziistrazivace();
?>
</body>
</html>