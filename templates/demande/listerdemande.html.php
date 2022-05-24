<?php

use App\Model\Demande;
$demande= demande::findAll();
//dd($professeurs);


?>
    <h1>LISTE DES DEMANDES</h1>

<table class="table table-hover">
    <thead>
        <tr>
            <th>Etat</th>
            <th>Motif</th>
            <th>Date</th>

        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($demande as $demande) 
        {
            echo "<tr>";
            echo "<td>".$demande->etat."</td>";
            echo "<td>".$demande->motif."</td>";
            echo "<td>".$demande->date."</td>";


           
        

            echo "</tr>";
        }
        ?>
    </tbody>
</table>