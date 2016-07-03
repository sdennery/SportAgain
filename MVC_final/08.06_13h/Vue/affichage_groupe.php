<?php
    include "../Modele/connect.php";
?>

<?php session_start();?>
<html>
<head>
    <link rel="stylesheet" href=../Vue/afficgage_groupe.css">
    <meta charset="utf-8"/>
</head>
<!--Mise en place du logo et connexion/inscription-->
<?php include('../Controleur/choix_header.php'); ?>  
<body>
    <div id="fondPage">
    <br>
        <div class="bordure">
            <form method="GET" action="../Vue/affichage_groupe.php">
        <p>
            <center> 
                    <input type="text" name="requete" placeholder="Recherchez le nom d'un groupe" size="30">
                    <input type="submit" value="Ok">
            </center>
        </p>
        <p> 
            <a href="../Vue/groupe(NC)2.php" class="recherche" > 
                   <center>
                       Recherche Avancée  
                   </center>
            </a>
        </p>
        </form>
<?php
    if (isset($_GET['requete'])){
    if(!empty($_GET['requete'])){
        
    $vignettesParPage=2;
        
        $requete=htmlspecialchars($_GET['requete']);
    $reponse = $bdd->prepare("SELECT * FROM groupe WHERE nom LIKE '%$requete%' ORDER BY id_groupe ASC");
    $reponse->execute(array($_GET['requete']));
    $result = $reponse->fetchAll();
    $nbre = count($result);
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
        $retour_vignettes=$bdd->prepare("SELECT * FROM groupe WHERE nom LIKE '%$requete%' ORDER BY id_groupe ASC LIMIT $premiereEntree, $vignettesParPage");
        $retour_vignettes->execute(array($_GET['requete']));
        while($donnees = $retour_vignettes->fetch()) 
        {
            ?>
            <table id ="vignette">
                <tr style="margin-left:25px;">
                    <td> 
                        <img src="../Vue/Image/<?php echo $donnees['image'];?>" class="alignement" id="alignement_image"/> 
                    </td>
                    <td> 
                        <p class="alignement" id="alignement_nom"> 
                        <strong>
                            <?php echo $donnees['nom']?>
                        </strong>
                        <?php echo ' ('?><?php echo $donnees['etat']?><?php echo ')'?>
                        </p> 
                    <br> 
                    <br> 
                    <span class="alignement" id="alignement_descriptif">
                        <?php echo $donnees['descriptif']?>
                    </span>
                    </td>
                    <td> 
                        <a href="Page_Groupe.php" id="rejoindre">
                            
                            <strong>
                                <a href='../Vue/Page_Leader_Groupe.php<?php echo'?nom='.$donnees['nom'] ?>'>Rejoindre ce groupe</a>
                            </strong>
                        </a>
                    </td>
                    <td id="agencement">
                        <center>
                            <p class="placement">
                                <?php echo $donnees['nombre_inscrit']?><?php echo '/'?><?=$donnees['nombre_place']?>
                            </p>
                            <p class="placement">
                                <?php echo $donnees['sport']?>
                            </p>
                            <p class="placement">
                                <?php echo $donnees['niveau']?>
                            </p>
                            <p class="placement">
                                <?php echo $donnees['departement']?>
                            </p>
                        </center>
                    </td>
                </tr>    
            </table>
            <br>
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
                <a href=<?php echo "?requete=".$_GET['requete']."&p=".$i.'"' ?>>
                    <?php echo $i ?>
                </a>
                <?php
                }
            }
            echo '</p>';
            ?>
    <?php
    }else 
        {
    ?>
        <center>
            <?php echo "Il n'y aucun résultat pour votre demande !";?>
        </center>
        <br>
    <?php
        }
    ?>    
<?php
}else {
?>
    <center>
        <?php echo "Vous n'avez saisi aucune information !"; ?>
    </center>
    <br>
<?php
} 
}
?>
        </div>
    </div>
<br>
<br>            
<?php include("footer.php") ?> 
</body>      
</html>