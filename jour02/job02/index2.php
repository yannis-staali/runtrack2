<?php

$i=0 ;
$max=1137 ;

    while($i<=$max)
    {
        if(($i==26) || ($i==37)|| ($i==88)|| ($i==1111))
        {
            echo "" . '<br />' ;
            $i=$i+1;
        }
    
    else echo $i . '<br />' ;
    $i=$i+1;

    }



?>