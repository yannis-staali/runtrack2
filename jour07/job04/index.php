<?php

if(isset($_POST['connexion']) && isset($_POST['prenom']))
{ 
    setcookie('nameuser');
    $_COOKIE['nameuser']=$_POST['prenom'];

    // setcookie('nameuser',$_POST['prenom']);
    echo 'bonjour ' . $_COOKIE['nameuser'] .'<br />' ;
    echo "<form action='index.php' method='post'> 
            <input type='submit' name='deco' value='deconnexion'> </form>";
}
else echo " <form action='index.php' method='post'>
<input type='text' name='prenom'>
<input type='submit' name='connexion' value='connexion'> 
</form>";

?>
