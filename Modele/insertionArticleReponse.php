<!DOCTYPE html> 
<html> 
   <head> 
      <title>Blog</title> 
      <meta charset="utf-8" /> 
   </head> 
<body> 
<?php 

if(isset($_POST['Contenu']))      $Contenu=$_POST['Contenu'];
else      $Contenu="";

if(empty($Contenu))
{
    echo '<font color="red">Attention, tous les champs sont obligatoires !</font>';
    } 

else
{
	try {
    $bdd = new PDO('mysql:host=localhost;dbname=test5;charset=utf8', 'root', '');
}

catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}


$req = $bdd->prepare('INSERT INTO reponse (contenu) VALUES ( ?, )');
//if (isset($_POST['Titre']) && isset($_POST['Commentaire'])){

$req->execute(array($_POST['Contenu']));
//}
}
?> 
<a href="index.php" >retour à la page des catégories</a> 
</body> 
</html>