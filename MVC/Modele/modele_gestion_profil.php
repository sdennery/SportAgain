<?php  

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

$reponse = $bdd -> query ('SELECT * FROM utilisateur WHERE id_utilisateur=3');
 


//Afficher les informations du profil connecté

//$req = $bdd->prepare('SELECT * FROM utilisateur WHERE id_utilisateur = 3');
//$req->execute(array($_SESSION['id']));
//$resultat = $req->fetch();

?>



