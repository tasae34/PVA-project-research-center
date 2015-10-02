<?php
$b=mysqli_connect("localhost","root","","projekat_nrt612");
$sql="SELECT * FROM komentari WHERE idvest=".$_GET['id']." ORDER by idkom DESC LIMIT 5;";
$rez=mysqli_query($b,$sql);
$html="";
while($red=mysqli_fetch_assoc($rez)){
    $html.="<hr>";
    $html.="<h3>".$red['naslov']."</h3><br>";
    $html.="<p>".$red['tekst']."</p><br>";
    $html.="<h3> Postavio: ".$red['autor']."</h3>";
    $html.="<hr>";
}
echo $html;
?>