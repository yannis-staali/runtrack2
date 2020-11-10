<?php

	session_start();
	
	if(!isset($_SESSION["nbvisites"]))
	{
		$_SESSION["nbvisites"] = 1;
		echo $_SESSION["nbvisites"];
	}
	else  
	{
		$_SESSION["nbvisites"] ++;
		echo $_SESSION["nbvisites"];
	}
	
	if(isset($_POST["resetBtn"]))
	{
		// $_SESSION['nbvisites']=0;
		session_destroy();
		header("location:index.php");
	}
	
?>

<form method="post" action="index.php">
	<input type="submit" value="Reset" name="resetBtn"/>
</form>