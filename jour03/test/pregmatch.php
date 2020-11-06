


<?php
$subject =  "salut les copains";
$pattern = '/a|e|i|o|u|y/';
preg_match($pattern, $subject, $matches, PREG_OFFSET_CAPTURE);
print_r($matches);
?>

<?php



// $str = 'salut les copains' ;
// $voyelles = '/(a),(e),(i),(o),(u),(y)/' ;

// // preg_match('/(a)(e)(i)(o)(u)(y)/',"$str", $matches) ;
// // print_r($matches) ;

// preg_match($voyelles, substr($str, 3), $answer);
// print_r($answer);

?> 