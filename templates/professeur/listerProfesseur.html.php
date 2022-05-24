

 <?php

use App\Model\Professeur;

$professeurs = Professeur::findAll();
//dd($professeurs);



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= $Constantes::WEB_ROOT."/css/style.css"?>">
</head>
<body>
    
</body>
</html>
    <h1>Liste Des Professeurs</h1>

    <table class="table table-hover">
  <a href="<?= $Constantes::WEB_ROOT."professeurs-add"?>"><button > + Add Professeur</button> </a>
    <thead>
        <tr>
            <th>Nom_Complet</th>
            <th>Grade</th>
        </tr>
    </thead>
    <tbody>
     
 <?php foreach($professeurs as $prof): ?>
            <tr>
                <td><?= $prof->nom_complet ?></td>
                <td><?= $prof->grade ?></td>
                
                <td><button>Modifier</button> <span></span><button>Supprimer</button></td>
            </tr>
            <?php endforeach; ?>


    </tbody>
</table>