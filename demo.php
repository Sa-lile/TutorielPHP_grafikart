Salut les gens
<?php
$prenom = 'Sachiyo';
$nom = 'Sablé';
echo $prenom . "\n" . $nom . "\n"; // si '\n', affiche comme ça. il faut utiliser ""
echo "$prenom\n$nom\n";
?>
Comment ça va?

<?php
// exo 1
$prenom = 'Marc';
$nom = 'Doe';
$note1 = 10;
$note2 = 20;
$moyenne = ($note1 + $note2) / 2 ;

echo 'Bonjour ' . $prenom . ' ' . $nom . ' vous avez eu ' . ($note1 + $note2) / 2 . ' de moyenne';
echo "\nBonjour $prenom $nom vous avez eu $moyenne de moyenne";

?>