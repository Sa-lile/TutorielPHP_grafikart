<?php
$aDeviner = 150;
$erreur = null;
$success = null;
$value = null;
if(isset($_GET['chiffre'])){

if($_GET['chiffre'] > $aDeviner) {
    $erreur = " Votre chiffre est trop grand";
        } elseif ($_GET['chiffre'] < $aDeviner) {
            $erreur = "Votre chiffre est trop petit";
        } else {
            $success = "Bravo ! Vous avez deviné le chiffre <strong>$aDeviner</strong>";
        }
$value = (int)$_GET['chiffre'];
}

require 'header.php';
?>

<?php if($_GET['chiffre'] > $aDeviner): ?>
    Votre chiffre est trop grand
<?php elseif($_GET['chiffre'] < $aDeviner): ?>
    Votre chiffre est trop petit
<?php else: ?>
    Bravo ! Vous avez deviné le chiffre <?= $aDeviner?>
<?php endif ?>

<form action="/jeu.php" method="GET">
    <input type="number" name="chiffre" placeholder="entre 0 et 1000" value="<?=$_GET['chiffre'] ?>">
    <button type="submit">Deviner</button>
</form>

<?php require 'footer.php' ?>