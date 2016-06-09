<?php include("../Controleur/controleur_page_admin.php")?>
<html>
<head>
    <link rel="stylesheet" href="../Vue/vue_back-office.css">
    <meta charset="utf-8"/>
</head>
	<?php require '../Controleur/choix_header.php';?>
<body>
   
    <div id="fond">
        <div id="gestion">
            <center><strong><p>Outils de gestion</p></strong></center>
            <span id="sup_modif">Modifier/Supprimer un des éléments suivants :</span>
            <p id="position_point1">.</p><p id="position_club"> Recherche club :</p><p class="modifier"><a href="../Controleur/controleur_back-office_modifier_club.php">Modifier</a></p><p class="supprimer"><a href="../Controleur/controleur_back-office_supprimer_club.php">Supprimer</a></p>
            <p id="position_point2">.</p><p id="position_groupe"> Recherche groupe :</p><p class="modifier"><a href="../Controleur/controleur_back-office_modifier_groupe.php">Modifier</a></p><p class="supprimer"><a href="../Controleur/controleur_back-office_supprimer_groupe.php">Supprimer</a></p>
            <p id="position_point3">.</p><p id="position_utilisateur"> Recherche utilisateur :</p><p class="supprimer"><a href="../Controleur/controleur_back-office_supprimer_utilisateur.php">Supprimer</a></p>
            <p id="position_point4">.</p><p id="position_sport"> Recherche d'évènement :</p><p class="supprimer"><a href="../Controleur/controleur_back-office_supprimer_evenement.php">Supprimer</a></p>
        </div>
        <div id="info">
            <center><strong><p>Informations</p></strong></center>
            <p class="position_nombre">Nombre d'évènement : 
            <?php
            if(isset($nbre_total_planning)){
                echo $nbre_total_planning;
            }else{
                echo $err_message;
            }
            ?>
            </p>
            <p class="position_nombre">Nombre de groupe :
             <?php
             if(isset($nbre_total_groupe)){
                    echo $nbre_total_groupe;
                }else{
                    echo $err_message;
                }
            ?>
            </p>
            <p class="position_nombre">Nombre de club : 
            <?php 
            if(isset($nbre_total_club)){
                echo $nbre_total_club;
            }else{ 
                echo $err_message;
            }
            ?>
            </p>
            <p class="position_nombre">Nombre d'utilisateur :
            <?php 
            if(isset($nbre_total_utilisateur)){
                    echo $nbre_total_utilisateur;
            }else{
                echo $err_message;
            }
            ?>
            </p>
        </div>
    </div>
    <?php include("footer.php")?>
</body>
</html>