<?php

use App\Model\Ac;
use App\Model\AnneeScolaire;

class Inscription
{
    public function ac(): Ac
    {
        return new Ac();
    }
    public function AnneeScolaire(): AnneeScolaire
    {
        return new AnneeScolaire();
    }
}
