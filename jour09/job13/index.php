<?php

$db=mysqli_connect("localhost", "root", "", "jour08");          //ligne de connection
$requete="SELECT salles.nom as 'nom de la salle', etage.nom as 'nom de l\'etage' FROM salles INNER JOIN etage ON salles.id_etage = etage.id";                             //requete sql
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