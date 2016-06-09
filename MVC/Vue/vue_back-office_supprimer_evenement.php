<html>
<head>
    <link rel="stylesheet" href="../Vue/vue_back-office_supprimer_evenement.css">
    <meta charset="utf-8"/>
</head>
<body>
<div id="fond">
    <form method="GET" action="../Controleur/controleur_recherche_back-office_evenement.php">
        <p id="barre">
            <center> 
                    <input type="text" name="requete" placeholder="Recherchez le nom d'un evenement" size="30">
                    <input type="submit" name="submit" value="Ok">
            </center>
        </p>
    </form> 
    <p id="recherche_avancee"><center><a href="../Controleur/controleur_recherche_avancee_supprimer_evenement.php">Recherche avancée</a></center></p>
    <div id="gestion">
        <center><strong><p>Evenements</p></strong></center>
        <?php 
        if(isset($_GET['requete']))
        {
            if(isset($vignettes))
            {
                foreach($vignettes as $vignette) 
                {
                ?>
                    <aside id="position_nom">
                        <span><?php echo "<a href=\"#\" onClick=\"confirme121('".$vignette['id_planning']."','".$requete."')\" >";?><?php echo $vignette['titre']?><?php echo "</a>";?></span>
                    </aside>
                    <aside id="position_sup">
                        <span><?php echo "<a href=\"#\" onClick=\"confirme12('".$vignette['id_planning']."','".$requete."')\" >";?><img src="../Vue/Image/button-supprimer(2).png" id="taille_sup"/><?php echo "</a>";?></span>
                    </aside>
                <?php
                }
            }else{
            ?>
                <p id="position_erreur"><center><?php echo $error_message;?></center></p>
            <?php
            }
        }
        if(isset($vignettesplanning))
        {
            if(!empty($vignettesplanning))
            {
                foreach($vignettesplanning as $vignettesplanning)
                {
                ?>
                    <aside id="position_nom">
                        <span><?php echo "<a href=\"#\" onClick=\"confirme41('".$vignettesplanning['id_planning']."')\" >";?><?php echo $vignettesplanning['titre']?><?php echo "</a>";?></span>
                    </aside>
                    <aside id="position_sup">
                        <span><?php echo "<a href=\"#\"    onClick=\"confirme4('".$vignettesplanning['id_planning']."')\" >";?><img src="../Vue/Image/button-supprimer(2).png" /><?php echo "</a>";?></span>
                    </aside>
                <?php
                }
            }else{
                if(!isset($_GET['requete']))
                {
                ?>
                    <p id="position_erreur"><center><?php echo $error_message;?></center></p>
                <?php
                }
            }
        }
        ?> 
    </div>
    <div id="info">
        <center><strong><p>Informations sur l'évènement</p></strong></center>
           <?php
            if(isset($_GET['id_planning']))
            {
                if(isset($vignette_planning_unique))
                {
                    foreach($vignette_planning_unique as $vignette_planning_unique)
                    {
                    ?>
                        <p class="position_nombre">Titre de l'évènement : <?php echo $vignette_planning_unique['titre']?></p>
                        <p class="position_nombre">Lieu : <?php echo $vignette_planning_unique['lieu']?></p>
                        <p class="position_nombre">Horaire : <?php echo $vignette_planning_unique['date']?></p>
                        
                        <p class="position_nombre">Sport : <?php echo $vignette_planning_unique['sport']?></p>
                        <p class="position_nombre">Descriptif : <?php echo $vignette_planning_unique['descriptif_event']?></p>
                    <?php
                    }
                }
            }
            ?>
    </div>
    <p id="position_retour"><center><a href="../Controleur/controleur_back-office.php" id="retour_accueil"> Retour à la page principale </a></center></p>  
    </div>  
    <?php include("footer.php")?>
    </body>
</html>