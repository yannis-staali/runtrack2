
<?php

$_SESSION['prenom']='';

session_start();   

if(isset($_POST['reset']))
{
    $_SESSION['prenom']='';
}

if(isset($_POST['submit']) && isset($_POST['prenom']))
{
    $_SESSION['prenom']=$_SESSION['prenom'].'<br>'.$_POST['prenom'];
}

echo $_SESSION['prenom'];

?>
<form action="index.php" method="post">
    <input type="text" name="prenom">
    <input type="submit" name="submit"> 
    <input type="submit" name="reset" value="Reset">
</form>
