<?php

$str='On n est pas le meilleur quand on le croit mais quand on le sait';

$Voyelles=0;
$Consonnes=0;
for($i=0; $i<=strlen($str)-1; $i++){
    switch( $str[$i]){                
        case 'a':
        case 'e':
        case 'i':
        case 'o':
        case 'u':
        case 'y':
            $Voyelles++;           
        break;
    }
}
$Consonnes=strlen($str)-$Voyelles;

echo 'nombre de consonne '.$Consonnes.'<br>';
echo 'nombre de voyelles '.$Voyelles.'<br>';

$dic=[
    'Voyelles'=>$Voyelles,
    'Consonnes'=>$Consonnes
];
?>
<html>
<body>
    <table>
        <thead>
            <tr>
                <th>
                    <?php
                        echo '<th>Voyelles</th>';
                        echo '<th>Consonnes</th>';
                    ?>
                </th>
            </tr>
            <tr>
                <?php
                    echo '<td>'.$Voyelles.'</td>';
                    echo '<td>'.$Consonnes.'</td>';
                ?>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</body>
</html>