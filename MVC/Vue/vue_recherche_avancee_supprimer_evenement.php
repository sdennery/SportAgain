<html>
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="../Vue/vue_recherche_avancee_supprimer_evenement.css">
</head>
<?php include "../Controleur/choix_header.php" ?>  
<body>
<!--Information sur le groupe, Création des menus déroulants -->
    <div class="fondBleu">
        <br>
        <div class="bordure">
            <p style="font-size:18px;margin-left:20%">
                <center>     
                    <strong> Recherche avancée d'un évènement </strong>
                </center>
            </p>
            <form method="GET" action="">    
                <p style="margin-left:36%"> 
                    Sport : 
                    <span class="espace">
                        <select name="sport" size="1" style="margin-left:16.3%"> 
                            <option value="0"> Sport </option>
                            <option value="Athlétisme"> Athlétisme </option>
                            <option value="Aérobie"> Aérobie </option>
                            <option value="Badminton"> Badminton </option>
                            <option value="Boxe"> Boxe </option>
                            <option value="Basket-ball"> Basket-ball </option>
                            <option value="Cardio"> Cardio </option>
                            <option value="Danse"> Danse </option>
                            <option value="Equitation"> Equitation </option>
                            <option value="Escalade"> Escalade </option>
                            <option value="Foot US"> Foot US </option>
                            <option value="Football"> Football </option>
                            <option value="Handball"> Handball </option>
                            <option value="Hockey"> Hockey </option>
                            <option value="Kayak"> Kayak </option>
                            <option value="Kite surf"> Kite surf </option>
                            <option value="Marche nordique"> Marche nordique </option>
                            <option value="Marche rapide"> Marche rapide </option>
                            <option value="Musculation"> Musculation </option>
                            <option value="Natation"> Natation </option>
                            <option value="Paddle"> Paddle </option>
                            <option value="Parachute"> Parachute </option>
                            <option value="Pêche"> Pêche </option>
                            <option value="Pétanque"> Pétanque </option>
                            <option value="Plongée"> Plongée </option>
                            <option value="Randonnée"> Randonnée </option>
                            <option value="Roller"> Roller </option>
                            <option value="Rugby"> Rugby </option>
                            <option value="Running"> Running </option>
                            <option value="Running Trail"> Running Trail </option>
                            <option value="Skateboard"> Skateboard </option>
                            <option value="Ski"> Ski </option>
                            <option value="Snowboard"> Snowboard </option>
                            <option value="Spéléologie"> Spéléologie </option>
                            <option value="Squash"> Squash </option>
                            <option value="Surf"> Surf </option>
                            <option value="Tennis"> Tennis </option>
                            <option value="Tennis de table"> Tennis de table </option>
                            <option value="Tir à arc"> Tir à l'arc </option>
                            <option value="Trotinette"> Trotinette </option>
                            <option value="Vélo"> Vélo </option>
                            <option value="Voile"> Voile </option>
                            <option value="Volley"> Volley </option>
                            <option value="Waterpolo"> Waterpolo </option>
                        </select>
                    </span>
                </p>
                <p style="margin-left:12.6%">  
                    <input type="submit" value="Valider" style="margin-left:40%" />
                </p> 
            </form>
        </div>
        <div id="gestion">
            <center><strong><p>Evenements</p></strong></center>
            <?php
            if(isset($vignettes_planning))
            {      
                if(isset($nombre_total_vignette))
                {
                    if($nombre_total_vignette!=0)
                    {        
                        foreach($vignettes_planning as $vignettes_planning)
                        {
                        ?>
                            <aside id="position_nom">
                                <span><?php echo "<a href=\"#\" onClick=\"confirme111('".$vignettes_planning['id_planning']."','".$vignettes_planning['sport']."')\" >";?><?php echo $vignettes_planning['titre']?><?php echo "</a>";?></span>
                            </aside>
                            <aside id="position_sup">
                                <span><?php echo "<a href=\"#\" onClick=\"confirme11('".$vignettes_planning['id_planning']."','".$vignettes_planning['sport']."')\" >";?><img src="../Vue/Image/button-supprimer(2).png" /><?php echo "</a>";?></span>
                            </aside>
                            <br>
                        <?php
                        }
                    }else{
                    ?>
                        <p id="position_erreur"><center><?php echo $error_message;?></center></p>
                    <?php
                    }
                }
            }else{
            ?>
                <p id="position_erreur"><center><?php echo $error_message;?></center></p>
            <?php
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
<br>
<br>
<br>
<!--Bas de page-->
<?php include("footer.php") ?> 
                       
</body>
</html>