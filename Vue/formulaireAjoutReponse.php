<!DOCTYPE html> 
<html> 
   <head> 
      <title>Blog</title> 
      <?php include('header.php'); ?>
      <meta charset="utf-8" /> 
      <link href="style.css" rel="stylesheet" /> 
      

   </head> 

<body class="fond"> 

   <h2 class="formulaire_categorie">Formulaire ajout réponse</h2> 

   <form action="../Modele/insertionArticleCategorie.php" method="POST" > 

   <div id="banniere_image" href="">

      <p ><input type="HIDDEN" name="Reponse" value=" <?php echo $_GET['reponse']; ?>"/></p>
      <p class="contenu_ajout_categorie">Contenu: <textarea name="Contenu" rows="20" cols="50" ></textarea></p>


                     
 
      <input type="submit" name="ok" value="Envoyer" style="margin-left: 750px">
</div>
   </form> 
   </div>
<p><a href="../Modele/index.php">Retour à la liste des catégories</a></p>
   <br /> 
   
</body> 
</html>