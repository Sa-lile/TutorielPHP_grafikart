<?php
$notes = [10, 15, 16];
$eleves = [
    'cm2' => ['Jean', 'Marc', 'Jane', 'Marion'], // 'cm2' est key = $classe
    'cm1' => ['Emilie','Marcelin'],
];

foreach ($eleves as $classe => $listEleves) {
    echo " La classe $classe:\n";
    foreach ($listEleves as $eleve) {
    echo "- $eleve\n";
    }
    echo "\n";
}
