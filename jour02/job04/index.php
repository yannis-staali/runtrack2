<?php

$finish=100 ;

for($i=1;$i<=$finish;$i++)
{
        if($i%3==0 && $i%5==0)
        {
            echo 'Fizzbuzz<br/>';
            $i=$i+1;
            echo "$i<br/>";
        }
        else if($i%5==0)
        {
            echo 'Buzz<br/>';
            $i=$i+1;
            echo "$i<br/>";
        }
        else if($i%3==0)
        {
            echo 'Fizz<br/>';
            $i=$i+1;
            echo "$i<br/>";
        }
        else
        {
            echo "$i<br/>";
        }
}
?>


