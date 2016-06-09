<?php

$erreurs_inscription = array();
$statut=false;

try
{
    $bdd = new PDO("mysql:host=localhost;dbname=sport'again;charset=utf8", 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}


if($_POST['password']!=$_POST['password1']){
    $erreurs_inscription["password"]="Veuilez rentrer le meme mot de passe!";
    echo $erreurs_inscription["password"];
    $statut=true;
}

if(!($statut)){
    
    $password=  sha1($_POST['password']);
    
    
     $req = $bdd->prepare('INSERT INTO utilisateur(nom_utilisateur, mot_de_passe, nom, prenom, mail, adresse, date_de_naissance) VALUES(:nom_utilisateur, :mot_de_passe, :nom, :prenom, :mail, :adresse, :date_de_naissance)');
$req->execute(array(
    'nom_utilisateur' => htmlspecialchars($_POST['pseudo']),
    'mot_de_passe' => htmlspecialchars($_POST['password']),
    'nom' => htmlspecialchars($_POST['nom']),
    'prenom' => htmlspecialchars($_POST['prenom']),
    'mail' => htmlspecialchars($_POST['mail']),
    'adresse' => htmlspecialchars($_POST['adresse']),
    'date_de_naissance' => htmlspecialchars($_POST['date'])
    ));


}

