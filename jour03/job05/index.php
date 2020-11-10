<?php
	
	$str = "On nest pas le meilleur quand on le croit mais quand on le sait.";
	$dic = array("voyelles"=>array("a","e","i","o","u","y","A","E","I","O","U","Y"),
				 "consonnes"=>array("q","w","r","t","p","s","d","f","g","h","j","k","l","z","x","c","v","b","n","m"));
				 
	$voyelles = 0;
	$consonnes = 0;
	
    $i=0;
    while(isset($str[$i])==true)
	// while($count<=63)
	{
        $j = 0;
        while(isset($dic['voyelles'][$j])==true)
		// while($j<=11)
		{
			if($dic["voyelles"][$j]==$str[$i])
			{
				$voyelles ++;
			}
			
		$j++;
        }
        
		$k = 0;
		while(isset($dic["consonnes"][$k])==true)
		{
			if($dic["consonnes"][$k] == $str[$i])
			{
				$consonnes++;
			}
			$k++;
		}
	$i++;
	}
	
	
	echo "<table> 
			<thead>
				<th>Consonnes</th>
				<th>Voyelles</th>
			</thead>
			<tbody>
				<tr>
					<td>".$consonnes."</td>
					<td>".$voyelles."</td>
				</tr>
			</tbody>
	      </table>";

?>