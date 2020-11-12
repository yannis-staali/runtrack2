<?php

    $db = mysqli_connect('localhost', 'root', '', 'jour08');
    $query = 'SELECT * FROM etudiants;';

    
        if($result = mysqli_query($db, $query))
        {   
            echo "<table>";
            echo "<thead>";
            echo "<tr><th>Id</th><th>Prenom</th><th>Nom</th><th>Naissance</th><th>Sexe</th><th>Email</th><br>";
            echo "</thead>";
            echo "<tbody>";
            while($ligne = mysqli_fetch_assoc($result))
            {
                extract($ligne);
                echo "<tr><td>$id</td><td>$prenom</td><td>$nom</td><td>$naissance</td><td>$sexe</td><td>$email</td><br>";
            }
            echo "</tbody>";
            echo "</table>";
        }

    // mysql_close($db);

    
?>
<style>
    table tr td{
        border: 1px solid black;
         
    }
    table th{
        border : 1px solid black;
    }
</style>