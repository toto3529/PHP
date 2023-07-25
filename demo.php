<?php
// $notes = [10.2, 20, 10, 9.5, 8, 'eleve', 'prof']; // case de départ = 0
// echo $notes [1]; //==> affiche 20


$eleve = [
    'nom' => 'Doe',
    'prenom' => 'Marc', 
    'notes' => [10, 20, 15]
];
$eleve['prenom'] = 'Jean';  // écrase et remplace la valeur
$eleve['notes'][3] = 16;    // rajoute un élément à l'index 3 du tableau (sans num = fin du tableau)
$eleve['notes'][] = 17; 
$eleve['notes'][] = 18; 
$eleve['notes'][] = 19; 

echo $eleve ['prenom'] . ' ' . $eleve ['nom'];
print_r($eleve ['notes']); // tableau en représentation graphique
?>


<?php
$classe = [
    [
        'nom' => 'Doe',
        'prenom' => 'Marc', 
        'notes' => [10, 20, 15]
    ],
    [
        'nom' => 'Dupont',
        'prenom' => 'Paul', 
        'notes' => [5, 10, 12]
    ],
];
echo $classe [1]['notes'][1]; // affiche la 2eme note du 2eme élève de la classe

?>