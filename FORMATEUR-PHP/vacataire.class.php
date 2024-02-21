<?php
require_once 'personne.class.php';

class Vacataire extends Personne{
    private $Diplome; // Propriété privée pour stocker le diplôme du vacataire
    
    public function __construct($num, $nom, $prenom, $hs, $sh, $diplome)
    {
        parent::__construct($num, $nom, $prenom, $hs, $sh); // Appel du constructeur de la classe parente
        $this->Diplome = $diplome; // Initialisation de la propriété Diplome
    }
    
    public function __get($attr)
    {
        if (property_exists($this, $attr)) {
            return $this->$attr;
        } else {
            echo "l'attribut < ".$attr." > n'existe pas."; 
        }
    }
    
    public function calculsalaire()
    {
        return $this->heuresup * $this->salairhoraire;
    }
    
    public function __toString()
    {
        return $this->numero . '' . $this->nom . '' . strtoupper($this->prenom) . '' . $this->heuresup . '' . $this->salairhoraire . '' . $this->Diplome;
    }
}

?>
