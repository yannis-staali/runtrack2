<?php

    $db = mysqli_connect('localhost', 'root', '', 'jour08');
    $request = 'SELECT * FROM etudiants;';

    // $query = mysqli_query($db, $request);

    // $fields = mysqli_fetch_fields($query);
    // $etudiants = mysqli_fetch_all($query);
    
    $result = mysqli_query($db, $request);

        while($infochamps = mysqli_fetch_field($result))
        {
        echo  ' ';
        echo $infochamps ->name;
        echo  ' ';
        }
        // mysqli_free_result($result);


    mysqli_close($db);

?>

<!-- <table>
    <thead>
    <tr>
        <?php foreach ($fields as $field) {?> <th> <?php echo $field ->name ?>  <?php } ?> </th>
    </tr>
    </thead>

    <tbody>
        <?php foreach ($etudiants as $etudiant)
        {?>
            <tr>
                <?php foreach ($fields as $key => $field)
                {?>
                    <td>
                        <?php echo $etudiant[$key] ?>
                    </td>
                <?php 
                } ?>
            </tr>
        <?php 
        } ?>
    </tbody>
</table> -->

<table>

</table>