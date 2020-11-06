<?php

//  for($i=0; isset($_GET[$i]) ;$i++)
//  {
  
//     echo $_GET;
//  }

//------------------------------------------

//  $i=0 ;
//   foreach($_GET as $element[$i])
// {
   
//      $i=$i+1 ;
//     if($i<=isset($element[$i]))
//    echo $i ;
// }

//--------------------------------------------

 $i=0 ;
foreach($_GET as $key)
{
   $i++;
 }
 echo $i;
 echo "<br />";

//----------------------------------------------------

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
