<form action="index.php" method="post">
	<label for="username">username</label>
	<br>
	<input type="text" name="username">
	<br>
	<label for="password">Password</label>
	<br>
	<input type="password" name="password">
	<br>
	<input type="submit" name="submit">
</form>

<?php 
if (isset($_POST["submit"])) {

	if ($_POST['username']=='John' && $_POST['password']=='Rambo') {
		echo "C'est pas ma guerre";

	}
	else{

		echo "Votre pire cauchemar";
	}
}

?>