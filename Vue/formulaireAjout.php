<!DOCTYPE html> 
<html> 
   <head> 
      <title>Blog</title> 
      <?php include_once 'header.php'; ?>
      <meta charset="utf-8" /> 
      <link rel="stylesheet" href="footer.css">
   </head> 
<body> 
    <div style="background-color: rgb(112,169,198);margin-top: -49px;width:1333px;height:550px;border-left:solid 1.5px black;border-right: solid 1.5px black">
       <br>
       <br>
       <br>
        <div style="border:2.5px solid black;
    height:450px;
    min-height: 450px;
    width: 600px;
    min-width: 600px;
    margin-left:auto; 
    margin-right:auto; 
    background-color: #fff;
    border-radius: 8px;">
        <form action="../Modele/insertionArticle2.php" method="POST" > 
       <h2 style="margin-left: 220px">Ajouter un sujet</h2> 
       <br>
      <p style="margin-left: 100px">Pseudo: <input type="text" name="titre" style="margin-left: 3px;"/></p>
      <p style="margin-left: 100px">Sujet: <input type="text" name="sujet" style="margin-left: 15.5px;"/></p>
      <p style="margin-left: 100px">Commentaire: <br /><textarea name="commentaire" rows="10" cols="50"></textarea></p> 
    
      <input type="submit" name="ok" value="Envoyer" style="margin-left: 250px; margin-top: -100px;"> 
      <br>
      <br>
      <a href="../Modele/blog2.php" style="margin-left: 220px;" >VISITEZ LE FORUM</a>
   </form> 
        </div>
    </div>


</body> 
</html>