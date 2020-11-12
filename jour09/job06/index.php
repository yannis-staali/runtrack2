<?php

$db=mysqli_connect("localhost", "root", "", "jour08");          //ligne de connection
$requete="SELECT COUNT(*) FROM etudiants ";                             //requete sql
$query=mysqli_query($db, $requete);                             //requete sur la base de donnees

echo '<table>';

while (($resultat=mysqli_fetch_assoc($query))!=null)
{           
    
echo '<thead>';      
echo '<th>nb_etudiants</th>';                           //affiche les titres des colonnes
echo '</thead>';
echo'<tbody>';
echo '<tr>';
foreach($resultat as $value)
{
    echo '<td>'.$value.'</td>';                             //affiche les donnees de la table
}
echo '</tr>';
echo'</tbody>';
}
echo '</table>';
    
mysqli_close($db);
?>