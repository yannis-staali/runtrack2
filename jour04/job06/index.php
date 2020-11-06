<form action="index.php" method="get">
	<label for="nombre">username</label>
	<input type="text" name="nombre">

	<input type="submit" name="submit">
</form>

<?php 
if (isset($_GET["submit"])) 
{

    if ($_GET['nombre']%2==0)
    {
		echo "Nombre pair";
	}
    else
    {
		echo "Nombre impair";
	}
}

?>