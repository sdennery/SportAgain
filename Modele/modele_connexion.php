<?php 

function get_utilisateur($pseudo, $mdp){
 
global $bdd;
    
    // VÃ©rification des identifiants
$req = $bdd->prepare('SELECT id_utilisateur, nom_utilisateur, mot_de_passe FROM utilisateur WHERE nom_utilisateur = :nom_utilisateur AND mot_de_passe = :mot_de_passe');
$req->execute(array(
    'nom_utilisateur' => htmlspecialchars($pseudo),
    'mot_de_passe' => htmlspecialchars($mdp)));

$resultat = $req->fetch();

return $resultat;
}



