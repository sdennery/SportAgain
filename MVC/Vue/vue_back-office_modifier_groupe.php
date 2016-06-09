<html>
<head>
    <link rel="stylesheet" href="../Vue/vue_back-office_modifier_groupe.css">
    <meta charset="utf-8"/>
</head>
<body>
<div id="fond">
    <form method="GET" action="../Controleur/controleur_recherche_back-office_modifier_groupe.php">
        <p id="barre">
            <center> 
                    <input type="text" name="requete" placeholder="Recherchez le nom d'un groupe" size="30">
                    <input type="submit" name="submit" value="Ok">
            </center>
        </p>
    </form> 
    <p id="recherche_avancee"><center><a href="../Controleur/controleur_recherche_avancee_modifier_groupe.php">Recherche avancée</a></center></p>
    <div id="gestion">
        <center><strong><p>Groupes</p></strong></center>
         <?php
        if(isset($_GET['requete']))
        {
            if(isset($vignettes))
            {
                foreach($vignettes as $vignette_modifier) 
                {
                ?>
                    <article>
                        <span id="position_photo"><img src="../Vue/Image/<?php $vignette_modifier['image']?>" id="taille"/></span>
                    </article>
                    <aside id="position_nom">
                        <span><?php echo "<a href=\"#\" onClick=\"groupe_recherche('".$vignette_modifier['id_groupe']."','".$_GET['requete']."')\" >";?><?php echo $vignette_modifier['nom']?><?php echo "</a>";?></span>
                    </aside>
                    <aside id="position_sup">
                        <?php echo "<a href=\"#\" onClick=\"groupe_recherche_modifier('".$vignette_modifier['id_groupe']."','".$_GET['requete']."')\" >";?><span id="position_mod">Modifier</span><?php echo "</a>";?>
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
                        <span id="position_photo"><img src="../Vue/Image/<?php echo $vignettesgroupe['image'] ?>" id="taille"/></span>
                    </article>
                    <aside id="position_nom">
                        <span><?php echo "<a href=\"#\" onClick=\"groupe('".$vignettesgroupe['id_groupe']."')\" >";?><?php echo $vignettesgroupe['nom']?><?php echo "</a>";?></span>
                    </aside>
                    <aside>
                        <?php echo "<a href=\"#\" onClick=\"groupe_modifier('".$vignettesgroupe['id_groupe']."')\" >";?><span id="position_mod">Modifier</span><?php echo "</a>";?>
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
        if(isset($_POST)){
        if(!empty($_POST)){
        if(isset($vignettes_modifier_groupe))
        {
            if(!empty($vignettes_modifier_groupe))
            {
                foreach($vignettes_modifier_groupe as $vignettes_modifier)
                {
                ?>
                    <article>
                        <span id="position_photo"><img src="../Vue/Image/<?php echo $vignettes_modifier['image']?>" id="taille"/></span>
                    </article>
                    <aside id="position_nom">
                        <span><?php echo "<a href=\"#\" onClick=\"groupe('".$vignettes_modifier['id_groupe']."')\" >";?><?php echo $vignettes_modifier['nom']?><?php echo "</a>";?></span>
                    </aside>
                    <aside>
                         <?php echo "<a href=\"#\" onClick=\"groupe_modifier('".$vignettes_modifier['id_groupe']."')\" >";?><span id="position_mod">Modifier</span><?php echo "</a>";?>
                    </aside>
                <?php
                }
            }else{
                if(!isset($_GET['requete']))
                {
                ?>
                    <center><?php echo  $error_message;?></center>
                <?php
                }
            }
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