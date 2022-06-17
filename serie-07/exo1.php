<?php
class Ville {
    public function nomVille($ville=''){
        return 'La ville de '.$ville.' ' ;
    }
    public function departement($dep=''){
        return 'est dans le département : '.$dep.' ' ;
    }
}
$newVille = new Ville();
echo $newVille->nomVille('Nantes');
echo $newVille->departement('Loire Atlantique');
echo '</br>';
echo $newVille->nomVille('Lyon');
echo $newVille->departement('Rhône');
?>