<?php
session_start();
include('includes/meni.php');
?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Dokumenta</title>
</head>
<body>
<div id="sad"></div>
<div id="dok"></div>
<h3>Dokumenta:</h3>
<?php
$files="files";
$nf=scandir($files,1);
for ($i=0;$i<=(count($nf)-3);$i++){
    //echo '<h3>'.$nf[$i].'</h2>';
    $f=explode(".",$nf[$i]);
    if($f[1]!="txt"){
    echo '<a href="files/'.$nf[$i].'" target="blank">'.$nf[$i].'</a><br>';
    echo '<hr>';}
    else echo '<a href="#" data-id="../files/'.$nf[$i].'" class="txt">'.$nf[$i].'</a><br><hr>';



    //if($f[1]=="txt"){
        //echo '<br>Sadrzaj:<br>';
        $d="files/".$nf[$i];
        /*$dat=fopen($d,'r');
        if($dat){
            while(!feof($dat)){
                $lin=fgets($dat);
                echo $lin."<br>";
            }
        }
        fclose($dat);*/
    }
?>

</body>

<script src="javascript/jquery.js"></script>
<script>
    $(".txt").click(function(){
        var id=$(this).attr("data-id");
        $.post("datafunctions/open_file.php",{id:id})
            .done(function(data){
                $("#sad").html("<h3>Sadrzaj izabrane datoteke: </h3><br>");
                $("#dok").html(data);
            });
    });

</script>
</html>