<?php

// $i=0 ;
// foreach($_GET as $key)
// {
//    $i++;
//    echo $key . "<br />" ;
// }
// echo $i;

// echo "<br />";
// 

foreach( $_GET as $key => $value)
{
    echo '<tr><td>'.$key.'</td><td>'.$value.'</td></tr>';
}
    
?>



<form action="index.php" method="get">
    <label for="prenom">prenom:</label>
    <input type="text" id="prenom" name="prenom"><br /><br />
    <label for="nom">nom:</label>
    <input type="text" id="nom" name="nom"><br /><br />
    <label for="password">password:</label>
    <input type="password" id="password" name="password"><br /><br />
    <input type="submit" id="submit" name="submit"><br /><br />
</form>



<!-- 
<style>
    form td th{
        border 1px solid black;
    }
</style> -->