<?php

	function occurence($str, $char)
	{
		$i = 0;
		$count = 0;
		while(isset($str[$i])==true)
		{
			if ($str[$i] == $char)
			{
				$count ++;
			}
		$i ++;
		}
		
        return $count;
	}

$resultat = occurence("char char char", "c");
echo $resultat
?>

