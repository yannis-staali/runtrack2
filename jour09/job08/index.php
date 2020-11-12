
<?php

$db=mysqli_connect("localhost", "root", "", "jour08");          
$requete="SELECT SUM(capacite) FROM salles";                            
$query=mysqli_query($db, $requete);                             

echo '<table>';

while (($resultat=mysqli_fetch_assoc($query))!=null)
{           
    
echo '<thead>';      
echo '<th>capacite_totale</th>';                          
echo '</thead>';
echo'<tbody>';
echo '<tr>';
foreach($resultat as $value)
{
    echo '<td>'.$value.'</td>';                             
}
echo '</tr>';
echo'</tbody>';
}
echo '</table>';
    
mysqli_close($db);
?>
