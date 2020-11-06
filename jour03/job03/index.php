<?php

$str='I\'m sorry Dave i\'m afraid i can\'t do that';
$arr1= str_split($str) ;

$lettre = array ('a','e','i','o','u','y');

    if(in_array('a', $arr1, true))
    {
        print_r($arr1);
    }
    // $arr = str_split($str) ;
// print_r($arr);

    // foreach($str as $element)
    // {
    //    if($element==$voyelles)
    //    {
    //        echo $element . '<br />';
    //    }
    // }

?>