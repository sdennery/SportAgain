<!DOCTYPE html> 
<html> 
   <head> 
      <title>Blog</title> 
      <?php include('../Controleur/choix_header.php'); ?>
      <meta charset="utf-8" /> 
      <link href="style.css" rel="stylesheet" /> 
      

   </head> 

<body class="fond"> 

   <div id="buy" >
       <h2 class="formulaire_commentaire">Ajout de commentaires</h2> 

   <form id="buy_com" action="../Modele/insertionArticleCommentaire.php" method="POST" >
     <p class="titre_ajout_categorie">Titre: <input type="text" name="Titre" /></p>
      <p class="contenu_ajout_categorie">Contenu: <textarea name="Contenu" rows="20" cols="50" ></textarea></p>
          
 
      <input type="submit" name="ok" value="Envoyer" style="margin-left: 600px">
   </form>
</div> 
   </form> 
   </div>
<p><a href="../Modele/index.php">Retour à la liste des catégories</a></p>
   <br /> 
   
</body> 
</html>