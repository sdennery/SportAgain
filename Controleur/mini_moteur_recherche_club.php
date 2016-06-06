<?php session_start() ;?>

<html>
<head>
    <link rel="stylesheet" href="../Vue/recherche_club.css">
   <meta charset="utf-8"/>
   <?php require '../Controleur/choix_header.php';?>
</head>
<body>
    <div style="background-color: rgb(112,169,198);margin-top: -29px;border:1.5px solid black;border-radius: 3px;">
        <br>
        <br>
          <div class="bordure">
                <form method="GET" action="../Controleur/mini_moteur_recherche_club.php">
                    <br>
                    <br>
                <p>  <center> <input type="text" name="requete" placeholder="Recherchez le nom d'un club" size="30">
                    <input type="submit" value="Ok"></center></p>
                    <br>
                    <br>
                    <p> <a href="../Vue/rechercheclub2.php" class="recherche" > <center>Recherche Avancée  </center></a></p>
                </form>
            
  <?php
if(isset($_GET['requete']) && $_GET['requete'] != NULL){
    $vignettesParPage=2;
    $requete = htmlspecialchars($_GET['requete']);
    include "../Modele/connect.php";
    $reponse = $bdd->prepare("SELECT * FROM club WHERE nom LIKE '%$requete%' ORDER BY id_club ASC");
    $reponse->execute(array($_GET['requete']));
    $result = $reponse->fetchAll();
    $nbre = count($result);
    print_r($nbre);
    if($nbre!=0){
    $nombreDePages=ceil($nbre/$vignettesParPage);
    if(isset($_GET['p']) && !empty($_GET['p'])){
        $_GET['p']=intval($_GET['p']);
        if($_GET['p']>$nombreDePages){
            $pageActuelle = $nombreDePages;
        }else{
            $pageActuelle=$_GET['p'];
        }
        }else{
            $pageActuelle = 1;
        }
        $premiereEntree=($pageActuelle-1)*$vignettesParPage;
        $retour_vignettes=$bdd->prepare("SELECT * FROM club WHERE nom LIKE '%$requete%' ORDER BY id_club ASC LIMIT $premiereEntree, $vignettesParPage");
        $retour_vignettes->execute(array($_GET['requete']));
while($donnees = $retour_vignettes->fetch()) 
{
?>
    <table id ="vignette">
                <tr style="margin-left:25px;">
                    <td> <img src="../Vue/Image/googleplus-logo.png" class="alignement" id="alignement_image" style="height: 150px;width: 200px"/> <p style="margin-left: 15px">Propriétaire : <?php echo $donnees['Nom_proprietaire']?></p> <p style="margin-left: 15px"><?php echo "Tél : 0"?><?php echo $donnees['telephone']?></p></td>
                    <td></td>
                    <td> <p class="alignement" id="alignement_nom" > <center><strong style="font-size: 28px"><?php echo $donnees['nom']?></strong></center></p> <br>  <span class="placement" id="alignement_descriptif"><?php echo $donnees['descriptif']?>
    </span> <p><b>Adresse </b>: <?php echo $donnees['adresse']?> </p> <p> <b>Sport pratiqué</b> : <?php echo $donnees['sport']?></p> <p><b>Numéro de club </b>: <?php echo $donnees['numero_club']?> </p></td>
    <td></td>
                </table>;
<?php
}
            echo '<p align="center">Page :';
            //Pour l'affichage, on centre la liste des pages
            for($i=1; $i<=$nombreDePages; $i++) //On fait notre boucle
            {
                //On va faire notre condition
                if($i==$pageActuelle) //Si il s'agit de la page actuelle...
                {
                    echo ' [ '.$i.' ] '; 	
                ?>	
                <?php
                }else //Sinon...
                {
                ?>            
                    <a href=<?php echo "?requete=".$_GET['requete']."&p=".$i.'"' ?>><?php echo $i ?></a>
                    <?php
                }
            }
            echo '</p>';
?>
<?php
}else {
        ?>
        <center>
            <?php echo "Il n'y aucun résultat pour votre demande";?></center>
            
        <?php
    }
    
?>

<?php
}   else{
?>
   <center><?php echo "Vous n'avez saisi aucune information"; ?>
    </center>
<?php
} 
?>

    </div>
        
<?php include("../Vue/footer.php") ?> 
     </div>   
    </body>
</html>