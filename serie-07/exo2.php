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
}
$newVille = new Ville();
$newVille->nom = 'Nantes';
$newVille->departement = 'Loire atlantique';
echo $newVille->afficher();
echo '</br>';
$newVille = new Ville();
$newVille->nom = 'Lyon';
$newVille->departement = 'Rhône';
echo $newVille->afficher();
?>