<?php  

try
{
    $bdd = new PDO("mysql:host=localhost;dbname=sport'again;charset=utf8", 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$new_nom=$_POST['nom'];
$req = $bdd->prepare('UPDATE utilisateur nom = ? WHERE id_utilisateur=3');
$req ->execute (array($new_nom));
echo $_POST['nom'];
echo $new_nom;

?>
