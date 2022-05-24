<?php

use App\Model\Module;
$module= module::findAll();
// dd($module);


?>
    <h1>LISTE DES MODULES</h1>

<table class="table table-hover">
    <thead>
        <tr>
            <th>Nom_module</th>
            <th>Libeller_module</th>
            

        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($module as $module) 
        {
            echo "<tr>";
            echo "<td>".$module->nom_module."</td>";
            echo "<td>".$module->libeller_module."</td>";
    
            echo "</tr>";
        }
        ?>
    </tbody>
</table>