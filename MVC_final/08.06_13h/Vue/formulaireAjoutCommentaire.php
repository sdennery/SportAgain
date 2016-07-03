<?php session_start(); ?>

<!DOCTYPE html> 
<html> 
   <head> 
      <title>Blog</title> 
       <?php include('../Controleur/choix_header.php'); ?>
      <meta charset="utf-8" /> 
      <link href="style.css" rel="stylesheet" /> 

   </head> 

<body class="fond"> 

   <h2 class="formulaire_commentaire">Ajout de commentaires</h2> 

   <form action="../Modele/insertionArticleCommentaire.php" method="POST" > 



   <div id="banniere_image" href="">

      <p ><input type="HIDDEN" name="Categorie" value=" <?php echo $_GET['nom_categorie']; ?>"/></p>
      <p class="auteur_ajout_commentaire">Auteur: <input type="text" name="Auteur" value= "<?php echo $_SESSION['pseudo'] ; ?>" /></p> 
      <p>Commentaire: <textarea name="Commentaire" rows=20 cols=50 style="margin-left: 430px">

                        </textarea></p> 
          
 
      <input type="submit" name="ok" value="Envoyer" style="margin-left: 750px">
</div>
   </form> 
   </div>
<p><a href="../Modele/index.php" class="lien_ajout_commentaire">Retour à la liste des catégories</a></p>
   <br /> 
   
</body> 
</html>