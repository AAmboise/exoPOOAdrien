<?php
class Personne {
    public function __construct($id='', $class='personne'){
        echo '<div id="'.$id.'" class="'.$class.'">';   
    }
    public function nom($name=''){
        return 'nom : '.$name.' ' ;
    }
    public function prenom($fname=''){
        return 'prénom : '.$fname.' ' ;
    }
    public function adresse($adresse=''){
        return 'adresse : '.$adresse.' ';
    }
    public function fin(){
        echo '</div>';
    }
}
$newPersonne = new Personne('Adrien', '');
echo $newPersonne->nom('AMBOISE');
echo '</br>';
echo $newPersonne->prenom('Adrien');
echo '</br>';
echo $newPersonne->adresse('123, rue de truc, 45000, Orléans');
echo $newPersonne->fin();

$newPersonne = new Personne('Richard', '');
echo $newPersonne->nom('Desnoues');
echo '</br>';
echo $newPersonne->prenom('Richard');
echo '</br>';
echo $newPersonne->adresse('456, rue de bidule, 45000, Orléans');
echo $newPersonne->fin();
?>