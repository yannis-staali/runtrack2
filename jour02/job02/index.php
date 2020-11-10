<?php

$max = 1337;
$i = 0;
 
        for ($i = 0; $i <=$max; $i++)
        {
            if(($i==26) || ($i==37) || ($i==88) || ($i==1111))
            {
                echo "" . '<br />';
                // $i=$i+1;
                // echo "<br />";
            }
            
        else echo $i . '<br />';
                  
        }
            
?>
