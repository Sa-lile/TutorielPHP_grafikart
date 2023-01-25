<?php
$eleve = [
    'nom' => 'Doe',
    'prenom' => 'Marc',
    'notes' => [10, 20, 15]
];
echo $eleve['prenom'] = 'Jean';
echo $eleve['notes'][] = 16;
echo $eleve['notes'][] = 16;
echo $eleve['notes'][] = 16;
echo $eleve['notes'][] = 16;

print_r ($eleve['notes']);

?>