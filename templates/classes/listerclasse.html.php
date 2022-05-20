<?php

use App\Model\Classe;
$classe= classe::findAll();
//dd($professeurs);


?>
<table class="table table-hover">
    <thead>
        <tr>
            <th>libeller</th>
            <th>niveau</th>
            <th>filiere</th>

        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($classe as $classe) 
        {
            echo "<tr>";
            echo "<td>".$classe->libeller."</td>";
            echo "<td>".$classe->niveau."</td>";
            echo "<td>".$classe->filiere."</td>";

        

            echo "</tr>";
        }
        ?>
    </tbody>
</table>