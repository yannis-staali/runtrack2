
<?php

$myArray = array(200, 204, 173, 98, 171, 404, 459);
$i = 0;
while($i<=6)
{
	if($myArray[$i]%2==0)
	{
		echo $myArray[$i]." est Paire.";
	}
	else
	{
		echo $myArray[$i]." est Impaire.";
	}
	echo "<br/>";
	$i ++;
}