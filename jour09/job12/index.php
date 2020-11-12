<?php

$db=mysqli_connect("localhost", "root", "", "jour08");          //ligne de connection
$requete="SELECT prenom, nom, naissance FROM etudiants WHERE naissance BETWEEN '1998-01-01' AND '2018-01-01' ";                             //requete sql
$query=mysqli_query($db, $requete);                             //requete sur la base de donnees

echo '<table>';
$i=0;
while (($resultat=mysqli_fetch_assoc($query))!=null){           
    if($i==0){
        echo '<thead>';
        foreach($resultat as $key => $value){               
            echo '<th>'.$key.'</th>';                           //affiche les titres des colonnes
        }
        echo '</thead>';
        $i=1;
    }
    echo'<tbody>';
    echo '<tr>';
    foreach($resultat as $value){
        echo '<td>'.$value.'</td>';                             //affiche les donnees de la table
    }
   echo '</tr>';
   echo'</tbody>';
}
echo '</table>';
    
mysqli_close($db);
?>