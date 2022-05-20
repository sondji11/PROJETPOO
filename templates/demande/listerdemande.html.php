<?php

use App\Model\Demande;
$demande= demande::findAll();
//dd($professeurs);


?>
<table class="table table-hover">
    <thead>
        <tr>
            <th>etat</th>
           
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($demande as $demande) 
        {
            echo "<tr>";
            echo "<td>".$demande->etat."</td>";
           
        

            echo "</tr>";
        }
        ?>
    </tbody>
</table>