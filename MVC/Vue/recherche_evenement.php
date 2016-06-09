<html>
<head>
    <link rel="stylesheet" href="../Vue/affichage_groupe.css">
    <meta charset="utf-8"/>
</head>
<!--Mise en place du logo et connexion/inscription-->
<?php include("../Controleur/choix_header.php") ?>

<body>
    <div id="fondPage">
    <br>
        <div class="bordure">
        <form method="GET" action="../Controleur/index_recherche_evenement2.php">
        <p>
            <center> 
                    <input type="text" name="requete" placeholder="Recherchez le nom d'un evenement" size="30">
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
                    <p class="alignement" id="alignement_nom"> 
                    <strong>
                       Titre : <?php echo $vignette['titre']?>
                    </strong>
                    </p>
                    <p class="alignement">
                        Lieu :<?php echo $vignette['lieu']?>
                    </p>
                    <p class="alignement">
                        Sport :<?php echo $vignette['sport']?>
                    </p>
                    <br> 
                    <br> 
                    <span class="alignement" id="alignement_descriptif">
                        Descriptif :<?php echo $vignette['descriptif_event']?>
                    </span>
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
                <a href=<?php echo "?requete=".$_GET['requete']."&choix=".$_GET['choix']."&p=".$i.'"' ?>>
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
<?php include("../Vue/footer.php") ?> 
</body>      
</html>