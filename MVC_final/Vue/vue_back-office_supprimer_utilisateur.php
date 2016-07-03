<html>
<head>
    <link rel="stylesheet" href="../Vue/vue_back-office_supprimer_utilisateur.css">
    <meta charset="utf-8"/>
</head>
<body>
<div id="fond">
    <form method="GET" action="../Controleur/controleur_recherche_back-office_utilisateur.php">
        <p id="barre">
            <center> 
                    <input type="text" name="requete" placeholder="Recherchez le nom d'un utilisateur" size="30">
                    <input type="submit" name="submit" value="Ok">
            </center>
        </p>
        <p id="recherche_avancee"><center><a href="../Controleur/controleur_recherche_avancee_supprimer_utilisateur.php">Recherche avancée</a></center></p>
    </form> 
    <div id="gestion">
        <center><strong><p>Utilisateurs</p></strong></center>
        <?php
            if(isset($_GET['requete']))
            {
                if(isset($vignettes))
                {
                    foreach($vignettes as $vignette) 
                    {
                    ?>
                        <article>
                            <span id="position_photo"><img src="../Vue/Image/<?php echo $vignette?>" id="taille"/></span>
                        </article>
                        <aside id="position_nom">
                            <span><?php echo "<a href=\"#\" onClick=\"confirme101('".$vignette['id_utilisateur']."','".$requete."')\" >";?><?php echo $vignette['nom_utilisateur']?><?php echo "</a>";?></span>
                        </aside>
                        <aside id="position_sup">
                            <span ><?php echo "<a href=\"#\" onClick=\"confirme10('".$vignette['id_utilisateur']."','".$requete."')\" >";?><img src="../Vue/Image/button-supprimer(2).png" id="taille_sup"/><?php echo "</a>";?></span>
                        </aside>
                    <?php
                    }
                }else{
                ?>
                    <p id="position_erreur"><center><?php echo $error_message;?></center></p>
                <?php
                }
            }
            if(isset($vignettesutilisateur))
            {
                if(!empty($vignettesutilisateur))
                {
                    foreach($vignettesutilisateur as $vignettesutilisateur)
                    {
                    ?>
                        <article>
                            <span id="position_photo"><img src="../Vue/Image/facebook.png" id="taille"/></span>
                        </article>
                        <aside id="position_nom">
                            <span><?php echo "<a href=\"#\" onClick=\"confirme21('".$vignettesutilisateur['id_utilisateur']."')\" >";?><?php echo $vignettesutilisateur['nom_utilisateur']?><?php echo "</a>";?></span>
                        </aside>
                        <aside id="position_sup">
                            <span><?php echo "<a href=\"#\" onClick=\"confirme2('".$vignettesutilisateur['id_utilisateur']."')\" >";?><img src="../Vue/Image/button-supprimer(2).png" /><?php echo "</a>";?></span>
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
            <center><strong><p>Informations sur l'utilisateur</p></strong></center>
            <?php
            if(isset($_GET['id_utilisateur']))
            {
                if(isset($vignette_utilisateur_unique))
                {
                    foreach($vignette_utilisateur_unique as $vignette_utilisateur_unique)
                    {
                    ?>
                        <p class="position_nombre">Nom de l'utilisateur : <?php echo $vignette_utilisateur_unique['nom_utilisateur']?></p>
                        <p class="position_nombre">Mot de passe : <?php echo $vignette_utilisateur_unique['mot_de_passe']?></p>
                        <p class="position_nombre">Nom : <?php echo $vignette_utilisateur_unique['nom']?></p>
                        <p class="position_nombre">Prénom : <?php echo $vignette_utilisateur_unique['prenom']?></p>
                        <p class="position_nombre">Adresse mail : <?php echo $vignette_utilisateur_unique['mail']?></p>
                        <p class="position_nombre">Adresse : <?php echo $vignette_utilisateur_unique['adresse']?></p>
                        <p class="position_nombre">Département : <?php echo $vignette_utilisateur_unique['departement']?></p>
                        <p class="position_nombre">Date de naissance : <span id="descriptif"><?php echo $vignette_utilisateur_unique['date_de_naissance']?></span></p>
                        <p class="position_nombre">Sport favori :<?php echo $vignette_utilisateur_unique['sport_favori']?></p>
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