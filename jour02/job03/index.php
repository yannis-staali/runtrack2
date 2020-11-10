<?php

$max = 100;

$i = 0;
 
        for ($i = 0; $i <=$max; $i++)
        {
            if ($i<=20)
            {
                echo "<i>$i</i></br>";
            }
            elseif($i>=25 && $i<=50)
            {
                echo "<u>$i</u></br>"; 
                    if($i==41)
                    {
                        echo 'La Plateforme_<br/>';
                         $i=$i+1;
                    }
            }

        else echo $i . '<br>';
        }
        
            
        
    ?>
