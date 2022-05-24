<?php
use App\Core\Constantes;
?>



<nav class="navbar navbar-expand-lg navbar-bg-primary bg-primary">
    
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Accueil</a>
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?= $Constantes::WEB_ROOT."lister-etudiant"?>">Etudiants</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= $Constantes::WEB_ROOT."lister-professeur"?>">Professeurs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= $Constantes::WEB_ROOT."inscription"?>">Inscriptions</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/logout">Déconnexion</a>
                </li>
            </ul>
        </div>
    </div>
</nav> 