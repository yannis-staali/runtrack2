<?php

	$str = "Les choses que l'on possede finissent par nous posseder.";
    
    $i=0;
    $output = "";
    while(isset($str[$i]))
    {
        while($i>=0)
	    {
		$output = $output.$str[$i];
		$i--;
	    }
    $i++;
    }
	// $count=strlen($str)-1;
	
	

	echo $str;
    echo "<br>/".$output;
   


?>