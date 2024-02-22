<?php 
require_once 'personne.class.php';

class Formateur extends Personne{
    private $salairefix;
    private $niveau;

    public function __construct($num, $nom, $prenom, $hs, $sh,$sf,$niv)
    {
        parent::__construct($num, $nom, $prenom, $hs, $sh);
        $this->salairefix = $sf;
        $this->niveau = $niv;
    }

    public function __get($attr)
    {
        if (property_exists($this, $attr)) {
            return $this->$attr;
        }
        else
        {
            echo  ".$attr."  n'existe pas.";
        }
    }

    public function calculsalaire()
    {
        return ($this->heuresup * $this->salairhoraire)+$this->salairefix;
    }
    public function __toString()
    {
        return $this->numero . ' ' . $this->nom . ' ' . strtoupper($this->prenom) . ' ' . $this->heuresup . ' ' . $this->salairhoraire;
    }
}
?>
