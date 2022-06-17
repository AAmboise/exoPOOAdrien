<?php
require_once('class.ville.php');

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