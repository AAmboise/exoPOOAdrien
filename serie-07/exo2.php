
<?php
class Ville {
    public function __construct($id='ville', $class='ville'){
        echo '<div id="'.$id.'" class="'.$class.'">';   
    }
    public function nomVille($ville=''){
        return 'La ville de '.$ville.' ' ;
    }
    public function departement($dep=''){
        return 'est dans le département : '.$dep.' ' ;
    }
    public function fin(){
        echo '</div>';
    }
}
$newVille = new Ville('orleans', 'ville');
echo $newVille->nomVille('Orléans');
echo $newVille->departement('Loiret');
echo $newVille->fin();

$newVille = new Ville('Marseille','ville');
echo $newVille->nomVille('Marseille');
echo $newVille->departement('Bouches-du-Rhône');
echo $newVille->fin();
?>
