
<?php
	$str="I'm sorry Dave I'm afraid I can't do that.";
	
	$voyelle=array("a","e","i","o","u","y","A","E","I","O","U","Y");
	
	$i=0;
    while(isset($str[$i]))
	{
		$subCount=0;
        while(isset($subCount[$j]))
		{
			if($voyelle[$subCount] == $str[$i])
			{
				echo $str[$i];
			}
		$subCount++;
		}
	$i++;
	}


?>