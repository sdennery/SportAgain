<?php 
require_once 'connectBDD.php';
 ?>

<!DOCTYPE html> 
<html> 
   <head> 
      <title>Blog</title> 
      <meta charset="utf-8" /> 
   </head> 
<body> 
<?php 
 // Test pour savoir si les caractères ne sont pas vides
if(isset($_POST['Titre']) && isset($_POST['Contenu']))    

if(empty($_POST['Titre']) && empty($_POST['Contenu']) )
{
    echo '<font color="red">Attention, tous les champs sont obligatoires !</font>';
    } 

else
{
	connectBDD();


// Insert dans la BDD les infos recueillies par la méthode POST dans le formulaire
$req = connectBDD()->prepare('INSERT INTO categories (titre, contenu, date_post) VALUES (?, ?, NOW())');


$req->execute(array($_POST['Titre'], $_POST['Contenu']));
//}
}
?> 
<a href="index.php" >retour à la page des catégories</a> 
</body> 
</html>