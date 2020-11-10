<?php

if(isset($_POST['reset']))
{ 
     $_COOKIE['nbvisites']=0;
}

if(isset($_COOKIE['nbvisites']))
{
    setcookie('nbvisites', $_COOKIE['nbvisites']+1);
}
else setcookie('nbvisites', 1);

echo $_COOKIE['nbvisites'];
?>

<form action="index.php" method="post">
<input type="submit" name="reset" value="Reset">
</form>