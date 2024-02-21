<?php
abstract class Personne
{
    protected $numero;
    protected $nom;
    protected $prenom;
    protected $heuresup;
    protected $salairhoraire;
    
    public function __construct($num, $nom, $prenom, $hs, $sh)
    {
        $this->numero = $num;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->heuresup = $hs;
        $this->salairhoraire = $sh;
    }
    
    public function __get($attr)
    {
        if (property_exists($this, $attr)) {
            return $this->$attr;
        }
        else
        {
           echo "l'attribut < ".$attr." > n'existe pas.";
        }
    }
    
    abstract public function calculsalaire();
    
    public function __toString()
    {
        // Concaténer les propriétés pour former une chaîne représentant la personne
        return $this->numero . '' . $this->nom . '' . strtoupper($this->prenom) . '' . $this->heuresup . '' . $this->salairhoraire;
    }
}
