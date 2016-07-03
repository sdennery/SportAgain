<html>
<head>
    <link rel="stylesheet" href="../Vue/donnees_utilisateur.css">
    <meta charset="utf-8"/>
</head>
<body>
    <div class="fond">
   <?php 
        if(isset($id))
        {
        if(isset($afficher_vignette))
        {
            foreach ($afficher_vignette as $vignette)
            {
            ?>
                <table id="vignette">
                    <tr style="margin-left:25px;">
                        <td>
                            <img src="../Vue/Image/googleplus-logo.png" class="alignement" id="alignement_image"/> 
                        </td>
                        <td>
                            <p class="alignement" id="alignement_nom">
                                <strong>Nom utilisateur : </strong> <?php echo $vignette['nom_utilisateur']?>
                            </p> 
                            <p class="alignement" id="alignement_adresse">
                                <strong>Adresse : </strong><?php echo $vignette['adresse']?>
                            </p> 
                            <p class="alignement" id="alignement_nom2" >
                                <strong>Nom : </strong><?php echo $vignette['nom']?>
                                </p>
                                <p class="alignement" id="alignement_prenom">
                                <strong>Prenom : </strong><?php echo $vignette['prenom']?>
                                </p>
                                <p class="alignement" id="alignement_date">
                                    <strong>Date de naissance : </strong><?php echo $vignette['date_de_naissance']?>
                                </p>
                                <p class="alignement" id="alignement_departement">
                                    <strong>Departement : </strong><?php echo $vignette['departement']?>
                                </p>
                                <p class="alignement" id="alignement_sport">
                                    <strong>Sport favori : </strong><?php echo $vignette['sport_favori']?>
                                </p>
                                <p class="alignement" id="alignement_mail">
                                    <strong>Mail : </strong><?php echo $vignette['mail']?>
                                </p>
                        </td>
                        <td>
                            <a href="../Controleur/controleur_administrateur.php" id="rejoindre">
                                <strong> Retour à la page administrateur </strong>
                            </a>
                        </td>
                    </tr>    
                </table>
                <br>
            <?php
            }
            }
            }
            ?>

    </div>
    </body>

</html>