<?php

$str='Dans l\'espace, personne nevous entend crier';
$strlen=0;                          //on initialise la longueur de la chaine de caractere a 0

while(!empty($str[$strlen])){       //on parcours la chaine de caractere jusqu'a se retrouve sur un element vide
    $strlen++;                      //on compte le nombre de caracteres
}
echo $strlen;                       //on affiche la longueur de la chaine de caractere

?>