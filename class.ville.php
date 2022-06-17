<?php
class Ville {
    public $nom;
    public $departement;
    public function __construct($pnom,$pDepartement){
        $this->nom = $pnom;
        $this->departement = $departement;
    }
    public function afficher():String{
        return "La ville $this->nom est dans le département : $this->departement";
    }
    public function __toString(){ // surcharge de la methode toString héritée de Objet
        return "$this->nom : $this->departement";
    }
}

?>