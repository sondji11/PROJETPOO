<?php
namespace App\Model;


class Etudiant extends User 
{
    private string $matricule;
    private string $nom_complet;
    private string $niveau;
    private string $classe;



    private string $sexe;
    private string $adresse;

    public function demande():Demande
        {
            return new Demande();
        }


    public function __construct()
    {
        self::$role="ROLE_ETUDIANT";
    }

    /**
     * Get the value of matricule
     */ 
    public function getMatricule()
    {
        return $this->matricule;
    }

    /**
     * Set the value of matricule
     *
     * @return  self
     */ 
    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;

        return $this;
    }

    /**
     * Get the value of sexe
     */ 
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set the value of sexe
     *
     * @return  self
     */ 
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Get the value of adresse
     */ 
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set the value of adresse
     *
     * @return  self
     */ 
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }
    public  static function findAll():array{
        
        $db=self::database();
        
        $db->ConnexionBd();
         
        $sql="select * from personne where role like 'ROLE_ETUDIANT'";

        
       
        
        $results=$db->ExecuteSelect($sql);


        

        $db->CloseConnexion();
            
        
        return $results;
    }
   


    public function insert():int
    {
    $db=self:: database();
    $db->connexionBD();
    $sql="INSERT INTO `etudiant` ( `nom_complet`, `niveau`,`classe`,`sexe`,`matricule`,`adresse`) VALUES (?,?,?,?,?,?)";
    $result=$db->ExecuteUpdate($sql,[$this->nom_complet,$this->niveau,$this->classe,$this->sexe,$this->matricule,$this->adresse]);
    $db->CloseConnexion();
    return $result;
    
  }

    /**
     * Get the value of nom_complet
     */ 
    public function getNom_complet()
    {
        return $this->nom_complet;
    }

    /**
     * Set the value of nom_complet
     *
     * @return  self
     */ 
    public function setNom_complet($nom_complet)
    {
        $this->nom_complet = $nom_complet;

        return $this;
    }

    /**
     * Get the value of niveau
     */ 
    public function getNiveau()
    {
        return $this->niveau;
    }

    /**
     * Set the value of niveau
     *
     * @return  self
     */ 
    public function setNiveau($niveau)
    {
        $this->niveau = $niveau;

        return $this;
    }

    /**
     * Get the value of classe
     */ 
    public function getClasse()
    {
        return $this->classe;
    }

    /**
     * Set the value of classe
     *
     * @return  self
     */ 
    public function setClasse($classe)
    {
        $this->classe = $classe;

        return $this;
    }
}
