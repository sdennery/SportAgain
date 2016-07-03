<?php

// Connexion à la base de données

try
{
    $bdd = new PDO("mysql:host=localhost;dbname=sport'again;charset=utf8", 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
?>


<?php

//Afficher les informations du profil connecté

$req = $bdd->prepare('SELECT * FROM utilisateur WHERE id_utilisateur = ?');
$req->execute(array($_SESSION['id']));
$resultat = $req->fetch();
?>