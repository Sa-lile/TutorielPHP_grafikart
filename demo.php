<?php

// declare(strict_types=1);

function repondre_oui_non (string $phrase): bool {
  while(true){
    $reponse = readline($phrase . " - (o)ui/(n)on : ");
    if ($reponse === "o") {
        return true;
    } elseif ($reponse === 'n') {
        return false;
        }
    }
}

function demander_creneau ($phrase = 'Veuillez entrer votre creneau') {
    echo $phrase . "\n";

    while (true) {
        $ouverture = (int)readline('Heure d\'ouverture : ');
        if ($ouverture >= 0 && $ouverture <= 23) {
            break;
        }
    }
    while (true) {
        $fermeture = (int)readline('Heure de fermeture : ');
        if ($fermeture >= 0 && $fermeture <= 23 && $fermeture > $ouverture) {
            break;
        }
    }
    return [$ouverture, $fermeture];
}

function demander_creneaux() {
    $creneaux = [];
    $continuer =  true;
    while ($continuer) {
        $creneaux[] = demander_creneau();
        $continuer = repondre_oui_non('Voulez vous continuer ?');
    }
    var_dump($creneaux);
    for( $i = 0; $i < count($creneaux); $i++ ){
        echo "Jour ".$i." : " . $creneaux[$i][0] ." -> ". $creneaux[$i][1] . "\n";
    }
}
demander_creneaux();

