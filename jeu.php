<?php
$aDeviner = 160;
require 'header.php';
?>
<form action="/jeu.php" method="GET">
    <input type="number" name="chiffre" placeholder="entre 0 et 1000">
    <button type="submit">Deviner</button>
</form>

<?php require 'footer.php' ?>