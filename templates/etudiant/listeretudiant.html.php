<?php

use App\Model\Etudiant;
$etudiant= etudiant::findAll();
//dd($professeurs);


?>
<h1>Listes des Etudiants</h1>
<table class="table table-hover">

<button>+Add Etudiant</button>
    <thead>
        <tr>
            <th>Nom_Complet</th>
            <th>Sexe</th>
            <th>Adresse</th>
            <th>Matricule</th>
            <th>Action</th>
        </tr>
        
    </thead>
    <tbody>
       

        <?php foreach($etudiant as $etu): ?>
            <tr>
                <td><?= $etu->nom_complet ?></td>
                <td><?= $etu->sexe ?></td>
                <td><?= $etu->adresse ?></td>
                <td><?= $etu->matricule ?></td>
                <td><button>Modifier</button><button>Supprimer</button></td>
            </tr>
            <?php endforeach; ?>
    </tbody>
</table>