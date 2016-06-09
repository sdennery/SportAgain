<html>
<head>
    <link rel="stylesheet" href="../Vue/vue_back-office_supprimer_club.css">
    <meta charset="utf-8"/>
</head>
<body>
<div id="fond">
    <form method="GET" action="../Controleur/controleur_recherche_back-office_club.php">
        <p id="barre">
            <center> 
                    <input type="text" name="requete" placeholder="Recherchez le nom d'un club" size="30">
                    <input type="submit" name="submit" value="Ok">
            </center>
        </p>
    </form> 
    <p id="recherche_avancee"><center><a href="../Controleur/controleur_recherche_avancee_supprimer_club.php">Recherche avancée</a></center></p>
    <div id="gestion">
        <center><strong><p>Clubs</p></strong></center>
        <?php
        if (isset($_GET['requete']))
        {
            if(isset($vignettes))
            {
                foreach($vignettes as $vignette) 
                {
                ?>
                    <article>
                        <span id="position_photo"><img src="../Vue/Image/facebook.png" id="taille"/></span>
                    </article>
                    <aside id="position_nom">
                        <span><?php echo "<a href=\"#\" onClick=\"confirme81('".$vignette['id_club']."','".$requete."')\" >";?><?php echo $vignette['nom']?><?php echo "</a>";?></span>
                    </aside>
                    <aside id="position_sup">
                        <span ><?php echo "<a href=\"#\" onClick=\"confirme8('".$vignette['id_club']."','".$requete."')\" >";?><img src="../Vue/Image/button-supprimer(2).png" id="taille_sup"/><?php echo "</a>";?></span>
                    </aside>
                <?php
                }
            }else{
            ?>
                <center><?php echo  $error_message;?></center>
            <?php
            }
        }
        if(isset($vignettesclub))
        {
            if(!empty($vignettesclub))
            {
                foreach($vignettesclub as $vignettesclub)
                {
                ?>
                    <article>
                        <span id="position_photo"><img src="../Vue/Image/facebook.png" id="taille"/></span>
                    </article>
                    <aside id="position_nom">
                        <span><?php echo "<a href=\"#\" onClick=\"confirme('".$vignettesclub['id_club']."')\" >";?><?php echo $vignettesclub['nom']?><?php echo "</a>";?></span>
                    </aside>
                    <aside id="position_sup">
                        <span><?php echo "<a href=\"#\" onClick=\"confirme1('".$vignettesclub['id_club']."')\" >";?><img src="../Vue/Image/button-supprimer(2).png" /><?php echo "</a>";?></span>
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
        <center><strong><p>Informations du club</p></strong></center>
        <?php
        if(isset($_GET['id_club']))
        {
            if(isset($vignette_club_unique))
            {
                foreach($vignette_club_unique as $vignette_club_unique)
                {
                ?>
                    <p class="position_nombre">Nom propriétaire : <?php echo $vignette_club_unique['Nom_proprietaire']?></p>
                    <p class="position_nombre">Nom : <?php echo $vignette_club_unique['nom']?></p>
                    <p class="position_nombre">Numéro club : <?php echo $vignette_club_unique['numero_club']?></p>
                    <p class="position_nombre">Adresse : <?php echo $vignette_club_unique['adresse']?></p>
                    <p class="position_nombre">Sport : <?php echo $vignette_club_unique['sport']?></p>
                    <p class="position_nombre">Téléphone : <?php echo $vignette_club_unique['telephone']?></p>
                    <p class="position_nombre">Département : <?php echo $vignette_club_unique['Departement']?></p>
                    <p class="position_nombre">Descriptif : <span id="descriptif"><?php echo $vignette_club_unique['descriptif']?></span></p>
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