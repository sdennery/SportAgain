<html>
<head>
    <link rel="stylesheet" href="../Vue/affichage_groupe.css">
    <meta charset="utf-8"/>
</head>
<!--Mise en place du logo et connexion/inscription-->
<?php include("header_connecte.php") ?>
<?php include("../Controleur/controleur_connexion.php")?> 
<body>
    <div id="fondPage">
    <br>
        <div class="bordure">
        <form method="GET" action="index_recherche_groupe4.php">
        <p>
            <center> 
                    <input type="text" name="requete" placeholder="Recherchez le nom d'un groupe" size="30">
                    <input type="submit" name="submit" value="Ok">
            </center>
        </p>
        </form>
<?php
if(isset($vignettes)){
    foreach($vignettes as $vignette) 
    {
        ?>
        <table id ="vignette">
            <tr style="margin-left:25px;">
                <td> 
                    <img src="../Vue/Image/googleplus-logo.png" class="alignement" id="alignement_image"/> 
                </td>
                <td> 
                    <p class="alignement" id="alignement_nom"> 
                    <strong>
                        <?php echo $vignette['nom']?>
                    </strong>
                    <?php echo ' ('?><?php echo $vignette['etat']?><?php echo ')'?>
                    </p> 
                    <br> 
                    <br> 
                    <span class="alignement" id="alignement_descriptif">
                        <?php echo $vignette['descriptif']?>
                    </span>
                </td>
                <td> 
                    <a href="#" id="rejoindre">
                    <strong>
                        Rejoindre ce groupe
                    </strong>
                        </a>
                    </td>
                    <td id="agencement">
                        <center>
                            <p class="placement">
                                <?php echo $vignette['nombre_inscrit']?><?php echo '/'?><?php echo $vignette['nombre_place']?>
                            </p>
                            <p class="placement">
                                <?php echo $vignette['sport']?>
                            </p>
                            <p class="placement">
                                <?php echo $vignette['niveau']?>
                            </p>
                            <p class="placement">
                                <?php echo $vignette['departement']?>
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
}
else {
    if($a=!0){
    ?>
        <center><?php echo $error_message ?></center>
        <?php
        if($error_message=="Aucun résultat trouvé!"){
            echo '<p align="center">Page : 1';
            echo '</p>';
        }
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