<?php
session_start();
$allowedExts = array("zip", "doc", "pdf", "jpg" ,"png");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);
if (($_FILES["file"]["size"] < 5242880) && in_array($extension, $allowedExts)) {
    if ($_FILES["file"]["error"] > 0) {
        echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    } else {
        echo "Upload: " . $_FILES["file"]["name"] . "<br>";
        echo "Type: " . $_FILES["file"]["type"] . "<br>";
        echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
        echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";
        if (file_exists("../files/" . $_FILES["file"]["name"])) {
            echo $_FILES["file"]["name"] . " already exists. ";
        } else {
            move_uploaded_file($_FILES["file"]["tmp_name"],
                "../files/" . $_FILES["file"]["name"]);
            echo "Stored in: " . "../files/" . $_FILES["file"]["name"];
            echo 'Uspesno ukacen fajl!';
        }
    }
} else {
    echo "Nedozvoljeni tip / ili velicina";
}
header('location:'.$_SERVER['REFERER']);
?>