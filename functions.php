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

require_once 'functions_creneaux.php';

?>