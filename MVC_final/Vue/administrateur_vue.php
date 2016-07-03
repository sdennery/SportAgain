<html>
<head>
    <link rel="stylesheet" href="../Vue/administrateur_vue.css">
    <meta charset="utf-8"/>
</head>
    <body id="body">
        <div id="article">
            <div id="utilisateur">
            <p id="utilisateur2"> Utilisateur </p>
            <?php 
           
                if(isset($vignette)){
                foreach ($vignette as $vignettes){
                ?>
                <div class="vignette2">
                    <article id="position_photo"><img src="../Vue/Image/Naruto.jpg" id="taille"></article>
                    <aside id="position_nom"><a href='../Controleur/donnees_utilisateur_admin_controleur.php<?php echo '?id_utilisateur='.$vignettes['id_utilisateur']?>'><?php echo $vignettes['nom_utilisateur']?></a></aside>
                    <span id="position_sup_utilisateur"><?php echo "<a href=\"#\" onClick=\"confirme2('".$vignettes['id_utilisateur']."')\" >";?><img src="../Vue/Image/button-supprimer(2).png" /><?php echo "</a>";?></span> 
                </div>
                <?php
                }
                }
                ?>
            </div>
            <div id="groupe">
            <p id="position2"> Groupe </p>
            <?php 
            /*$req2=$bdd->prepare("SELECT * FROM groupe");
            $req2->execute();
            while ($vignette2 = $req2 -> fetch ) {*/
                if(isset($vignette2)){
                foreach ($vignette2 as $vignettes2){
                ?>
                <div class="vignette2">
                    <article id="position_photo2"><img src="../Vue/Image/<?php echo $vignettes2['image']?>" id="taille"></article>
                    <aside id="position_nom2"><a href='../Controleur/page_groupe_admin_controleur.php<?php echo '?id_groupe='.$vignettes2['id_groupe']?>'><?php echo $vignettes2['nom']?></a></aside>
                    <span id="position_sup_groupe"><?php echo "<a href=\"#\" onClick=\"confirme3('".$vignettes2['id_groupe']."')\" >";?><img src="../Vue/Image/button-supprimer(2).png" /><?php echo "</a>";?></span>
                </div>
                <?php
                }
                }
                ?>
            </div>
            <div id="club">
            <p id="club2"> Club </p>
            <?php 
                if (isset($vignette3)){
                foreach ($vignette3 as $vignettes3){
                ?>
                    <div class="vignette2">
                        
                         <article id="position_photo3"><img src="../Vue/Image/<?php echo $vignettes3['photo']?>" id="taille"/></article>
                         <article id="position_nom3"><a href='../Controleur/donnees_club_admin_controleur.php<?php echo '?id_club='.$vignettes3['id_club']?>'><?php echo $vignettes3['nom']?></a></article>
                         <span id="position_sup_club"><?php echo "<a href=\"#\" onClick=\"confirme('".$vignettes3['id_club']."')\" >";?><img src="../Vue/Image/button-supprimer(2).png" /><?php echo "</a>";?></span> 
                    </div> 
            <?php
            }
            }
            ?>
            </div>
            <div id="evenement">
               <p id="evenement2"> Evènement </p>
                <?php 
                if (isset($vignette4)){
                foreach ($vignette4 as $vignettes4){
                ?>
                <p class="vignette3">
                    <span id="position_nom4"><?php echo $vignettes4['titre']?></span>
                    <span id="position_sup_evenement"><?php echo "<a href=\"#\" onClick=\"confirme4('".$vignettes4['id_evenement']."')\" >";?><img src="../Vue/Image/button-supprimer(2).png" /><?php echo "</a>";?></span> 
                </p>
                <?php
                }
                }
                ?>
            </div>
        </div>
<?php include("footer.php")?>
</body>
</html>