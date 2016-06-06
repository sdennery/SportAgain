<?php require_once("connectBDD.php"); ?>

<!DOCTYPE html> 
<html> 
   <head> 
      <title>Blog</title> 
      <meta charset="utf-8" /> 
   </head> 
<body> 

<?php 
 // Test pour savoir si les caractères ne sont pas vides
 

if(empty($_POST))
{
    echo '<font color="red">Attention, tous les champs sont obligatoires !</font>';
    } 


else {

    connectBDD();


$req = connectBDD()->prepare('INSERT INTO commentaires (id_categorie, auteur, commentaire, date_post) VALUES (?, ?, ?, NOW())');
//if (isset($_POST['Titre']) && isset($_POST['Commentaire'])){

$req->execute(array($_POST['Categorie'], $_POST['Auteur'], $_POST['Commentaire']));
//}
} 
?> 
<a href="index.php" >retour à la page catégories</a> 
</body> 
</html>