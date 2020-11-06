<?php

$coco = array (200,204,173,98,171,404,459,);

foreach($coco as $element)
    {
         if($element%2==0)
         {
             echo $element . " " . 'est paire<br />';
        }
        if($element%2==true)
        {
            echo $element . " " . 'est impaire<br />';
        }
     }


?>


