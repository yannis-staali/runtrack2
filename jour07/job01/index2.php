<?php

session_start();

$_SESSION['nbvisites']=0;
if(isset($_SESSION['nbvisites'])==true)
{
    $_SESSION['nbvisites']++;
}
else $_SESSION['nbvisites']=0;


if(isset($_POST['reset'])==true) 
{                   
    $_SESSION['nbvisites']=0;           // ici on indique que que lorsque l'on clique sur le boutton reset on remet la va variable $_SESSION['nbvisites'] à 0 
}

?>

<form action="index.php" method="post">
    <input type="submit" name="reset" value="reset">
</form>