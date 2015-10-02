<?php

function connect(){
    $db=mysqli_connect("localhost","root","","projekat_nrt612");
    if(!$db){
        echo 'Nije uspelo konektovanje na bazu!';
        exit(1);
    }
    mysqli_set_charset($db,"utf8");
    return $db;
}

function prikazivesti(){
    $db=connect();
    $sql="SELECT * FROM vesti ORDER BY id DESC";
    $rez=mysqli_query($db,$sql);
    echo '<ul>';
    while($red=mysqli_fetch_assoc($rez)){
        echo '<li>';
        echo '<a href="vest.php?id='.$red['id'].'">'.$red['naslov'].'</a>';
        echo '</li>';
    }
    echo '</ul>';
}

function otvorivest($id){
    $db=connect();
    $sql="SELECT * FROM vesti WHERE id=".$id.";";
    $rez=mysqli_query($db,$sql);
    while($red=mysqli_fetch_assoc($rez)){
        echo '<h2>'.$red['naslov'].'</h2><br><hr>';
        echo '<p>'.$red['sadrzaj'].'</p><br><hr>';
        echo '<h4>Autor: '.$red['autor'].'</h4>';
    }
}

function prikaziistrazivace(){
    $db=connect();
    $sql="SELECT * FROM users WHERE tip='istrazivac';";
    $rez=mysqli_query($db,$sql);
    echo '<table style="border: 1px solid black; padding: 3px;">';
    echo '<tr><td style="border: 1px solid black; padding: 3px;">Ime i Prezime</td>';
    echo '<td style="border: 1px solid black; padding: 3px;">Slika</td></tr>';
    echo '<tbody>';
    while($red=mysqli_fetch_assoc($rez)){
        echo '<tr><td style="border: 1px solid black; padding: 3px;">';
        echo '<a href="istrazivac.php?id='.$red['id'].'">'.$red['ime_i_prezime'].'</a></td>';
        echo '<td style="border: 1px solid black; padding: 3px;"><img width="200" height="150" src="'.$red['slika'].'" alt="Neuspelo ucitavanje slike"/></td></tr>';

    }
    echo '</tbody>';
    echo '</table>';}

function otvoriistrazivaca($id){
    $db=connect();
    $sql="SELECT * FROM users WHERE id=".$id.";";
    $rez=mysqli_query($db,$sql);
    while($red=mysqli_fetch_assoc($rez)){
        echo '<h2>'.$red['ime_i_prezime'].'</h2><br>';
        echo '<img width="200" height="150" src="'.$red['slika'].'" alt="Neuspelo ucitavanje slike"/><hr>';
        echo '<h3>Zanimanje i obrazovanje:</h3>';
        echo '<p>'.$red['z_i_o'].'</p><br><hr>';
        echo '<h3>Naucni radovi i publikacije:</h3>';
        echo '<p>'.$red['reference'].'</p><br><hr>';
    }
}

function login($ime,$loz){
    $db=connect();
    $sql="SELECT * FROM users WHERE username='".$ime."'";   $sql.="AND password='".$loz."'";
    $rezultat=mysqli_query($db,$sql);
    if(mysqli_num_rows($rezultat)>0){
        $red=mysqli_fetch_assoc($rezultat);
        $_SESSION['id']=$red['id'];
        $_SESSION['tip']=$red['tip'];
        return true;
    }
    else return false;
}

function prikazistranicu($ime){
    $db=connect();
    $sql="SELECT * FROM stranice WHERE ime='".$ime."';";
    $rez=mysqli_query($db,$sql);
    if(mysqli_num_rows($rez)>0){
        $red=mysqli_fetch_assoc($rez);
        echo $red['html'];
    }
}

function postavikomentar($n,$t,$v,$idk){
    $db=connect();
    $sql1='SELECT * from users WHERE id='.$idk.';';
    $rez1=mysqli_query($db,$sql1);
    if(mysqli_num_rows($rez1)>0){
        $red=mysqli_fetch_assoc($rez1);
        $k=$red['username'];
    }
    $sql="INSERT INTO komentari (naslov,tekst,idvest,autor) VALUES(";
    $sql.="'".$n."', '".$t."', '".$v."', '".$k."');";
    $rez=mysqli_query($db,$sql);
}

function postavivest($n,$t,$idk){
    $db=connect();
    $sql1='SELECT * from users WHERE id='.$idk.';';
    $rez1=mysqli_query($db,$sql1);
    if(mysqli_num_rows($rez1)>0){
        $red=mysqli_fetch_assoc($rez1);
        $k=$red['username'];
    }
    $sql="INSERT INTO vesti (naslov,sadrzaj,autor) VALUES(";
    $sql.="'".$n."', '".$t."', '".$k."');";
    $rez=mysqli_query($db,$sql);
}

function azurirajistrazivaca($id,$ime,$datum,$zio,$ref,$sl){
    $db=connect();
    $sql="UPDATE users SET ime_i_prezime='".$ime."',datum_rodjenja='".$datum."',z_i_o='".$zio."',reference='".$ref."',slika='".$sl."' WHERE id=".$id.";";
    $rez=mysqli_query($db,$sql);
}

function obrisikomentar($id){
    $db=connect();
    $sql="DELETE FROM komentari WHERE idkom=".$id.";";
    $rez=mysqli_query($db,$sql);
}

function unesiistrazivaca($username,$password,$tip,$ime,$datum,$zio,$ref,$slika){
    $db=connect();
    $sql="INSERT INTO users(username,password,tip,ime_i_prezime,datum_rodjenja,z_i_o,reference,slika) VALUES(";
    $sql.="'".$username."','".$password."','".$tip."','".$ime."','".$datum."','".$zio."','".$ref."','".$slika."');";
    $rez=mysqli_query($db,$sql);

}

function obrisiistrazivaca($id){
    $db=connect();
    $sql="DELETE FROM users WHERE id=".$id.";";
    $rez=mysqli_query($db,$sql);
}

function azurirajstranicu($ime,$html){
    $db=connect();
    $sql="UPDATE stranice SET html='".$html."' WHERE ime='".$ime."';";
    $rez=mysqli_query($db,$sql);
}

function unesikorisnika($username,$password,$tip){
    $db=connect();
    $sql1="SELECT * FROM users WHERE username='".$username."';";
    $rez=mysqli_query($db,$sql1);
    if(mysqli_num_rows($rez)==0){
        $sql2="INSERT INTO users(username,password,tip) VALUES('".$username."','".$password."','".$tip."');";
        $rez2=mysqli_query($db,$sql2);
    }

}

function promenilozinku($ime,$pass){
    $db=connect();
    $sql="UPDATE users SET password='".$pass."' WHERE username='".$ime."';";
    echo $sql;
    $rez=mysqli_query($db,$sql);
}

function obrisikorisnika($ime){
    $db=connect();
    $sql="DELETE FROM users WHERE username='".$ime."';";
    $rez=mysqli_query($db,$sql);
}

?>