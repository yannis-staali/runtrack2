<?php
	$str="I'm sorry Dave I'm afraid I can't do that.";
	
	$voyelle=array("a","e","i","o","u","y","A","E","I","O","U","Y");
	
	$i=0;
	while(isset($str[$i]))
	{
        $j=0;
		while (isset($voyelle[$j]))
		{
			if($voyelle[$j] == $str[$i])
			{
				echo $str[$i];
			}
		$j++;
		}
	$i++;
	}
?>