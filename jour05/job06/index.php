<?php

// $str= 'leetspeak' ;

function leetspeak($str)
{
    $i=0;
   while (isset($str[$i])==true)
    {
        if($str[$i]=='a')
        {
            $str[$i] = '4';
        }
        elseif($str[$i]=='b')
        {
            $str[$i] = '9';
        }
        elseif($str[$i]=='e')
        {
            $str[$i] = '3';
        }
        elseif($str[$i]=='g')
        {
            $str[$i] = '6';
        }
        elseif($str[$i]=='l')
        {
            $str[$i] = '1';
        }
        elseif($str[$i]=='s')
        {
            $str[$i] = '5';
        }
        elseif($str[$i]=='t')
        {
            $str[$i] = '7';
        }
        // elseif($str[$i]=='p')
        // {
        //     echo 'p';
        // }
        // elseif($str[$i]=='k')
        // {
        //     echo 'k';
        // }
        // elseif($str[$i]==[$i])
        // {
        //     echo [$i];
        // }
    $i++;

    }
    return($str);
}

$resultat = leetspeak('marsezille békbmwxojdsé') ;
echo $resultat ;

?>
