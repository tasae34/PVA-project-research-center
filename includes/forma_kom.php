<?php
?>

<form action="datafunctions/kom_post.php" method="post">
    <?php echo'<input type="text" style="display: none;" name="id" value="'.$_GET['id'].'"/>'?>
    Naslov: <input type="text" name="naslov"/><br>
    Tekst komentara:<br> <textarea name="tekst" cols="30" rows="10"></textarea><br>
    <button>Posalji komentar</button>
</form>