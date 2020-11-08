<?php

function calcule($a, $operation, $b)
{
   if($operation == '+')
   {
       return ($a + $b);
   }
   elseif($operation == '-')
   {
       return ($a - $b);
   }
   elseif($operation == '*')
   {
       return ($a * $b);
   }
   elseif($operation == '/')
   {
       return ($a / $b);
   }
}
$resultat = calcule(5, '+', 60) ;
echo $resultat ;

?>