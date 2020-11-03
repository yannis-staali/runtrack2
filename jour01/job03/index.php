<?php

    $coconut = true ;
    $papaya = 5 ;
    $havana = 'Salut les copains';
    $marseille = 3.14 ;

?>


<table class="tableau">
    <tr>
        <td>Type</td>
        <td>Nom</td>
        <td>Valeur</td>
    </tr>
       
    <tr>
        <td><?php echo gettype($coconut)?></td>
        <td>$coconut</td>
        <td><?php echo $coconut ?></td>
    </tr>
        <td><?php echo gettype($papaya)?></td>
        <td>$papaya</td>
        <td><?php echo $papaya?></td>
    <tr>
    
    </tr>  
        <td><?php echo gettype($havana)?></td>
        <td>$havana</td>
        <td><?php echo ($havana)?></td>
    <tr>
        <td><?php echo gettype($marseille)?></td>
        <td>$marseille</td>
        <td><?php echo ($marseille)?></td>
    </tr>

</table>

<style>

.tableau tr td {
    border: solid 2px black;
    border-collapse: collapse;
}

</style>