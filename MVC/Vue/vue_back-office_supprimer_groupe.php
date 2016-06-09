<html>
<head>
    <link rel="stylesheet" href="../Vue/vue_back-office_supprimer_groupe.css">
    <meta charset="utf-8"/>
</head>
<body>
<div id="fond">
    <form method="GET" action="../Controleur/controleur_recherche_back-office_groupe.php">
        <p id="barre">
            <center> 
                    <input type="text" name="requete" placeholder="Recherchez le nom d'un groupe" size="30">
                    <input type="submit" name="submit" value="Ok">
            </center>
        </p>
    </form> 
    <p id="recherche_avancee"><center><a href="../Controleur/controleur_recherche_avancee_supprimer_groupe.php">Recherche avancée</a></center></p>
    <div id="gestion">
        <center><strong><p>Groupes</p></strong></center>
        <?php
        if(isset($_GET['requete']))
        {
            if(isset($vignettes))
            {
                foreach($vignettes as $vignette) 
                {
                ?>
                    <article>
                        <span id="position_photo"><img src="../Vue/Image/<?php echo $vignette['image']?>" id="taille"/></span>
                    </article>
                    <aside id="position_nom">
                        <span><?php echo "<a href=\"#\" onClick=\"confirme61('".$vignette['id_groupe']."','".$requete."')\" >";?><?php echo $vignette['nom']?><?php echo "</a>";?></span>
                    </aside>
                    <aside id="position_sup">
                        <span><?php echo "<a href=\"#\" onClick=\"confirme6('".$vignette['id_groupe']."','".$requete."')\" >";?><img src="../Vue/Image/button-supprimer(2).png" id="taille_sup"/><?php echo "</a>";?></span>
                    </aside>
                <?php
                }
            }else{
            ?>
                <center><?php echo  $error_message;?></center>
            <?php
            }
        }   
        if(isset($vignettesgroupe))
        {
            if(!empty($vignettesgroupe))
            {
                foreach($vignettesgroupe as $vignettesgroupe)
                {
                ?>
                    <article>
                        <span id="position_photo"><img src="../Vue/Image/<?php echo $vignettesgroupe['image'];?>" id="taille"/></span>
                    </article>
                    <aside id="position_nom">
                        <span><?php echo "<a href=\"#\" onClick=\"confirme31('".$vignettesgroupe['id_groupe']."')\" >";?><?php echo $vignettesgroupe['nom']?><?php echo "</a>";?></span>
                    </aside>
                    <aside id="position_sup">
                        <span><?php echo "<a href=\"#\" onClick=\"confirme3('".$vignettesgroupe['id_groupe']."')\" >";?><img src="../Vue/Image/button-supprimer(2).png" /><?php echo "</a>";?></span>
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
        <center><strong><p>Informations sur le groupe</p></strong></center>
        <?php
        if(isset($_GET['id_groupe']))
        {
            if(isset($vignette_groupe_unique))
            {
                foreach($vignette_groupe_unique as $vignette_groupe_unique)
                {
                ?>
                    <p class="position_nombre">Nom du groupe : <?php echo $vignette_groupe_unique['nom']?></p>
                    <p class="position_nombre">Sport : <?php echo $vignette_groupe_unique['sport']?></p>
                    <p class="position_nombre">Nom : <?php echo $vignette_groupe_unique['nom']?></p>
                    <p class="position_nombre">Nombre de place : <?php echo $vignette_groupe_unique['nombre_place']?></p>
                    <p class="position_nombre">Nombre d'inscrit : <?php echo $vignette_groupe_unique['nombre_inscrit']?></p>
                    <p class="position_nombre">Niveau : <?php echo $vignette_groupe_unique['niveau']?></p>
                    <p class="position_nombre">Etat : <?php echo $vignette_groupe_unique['etat']?></p>
                    <p class="position_nombre">Département : <span id="departement"><?php echo $vignette_groupe_unique['departement']?></span></p>
                    <p class="position_nombre">Descriptif : <?php echo $vignette_groupe_unique['descriptif']?></p>
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