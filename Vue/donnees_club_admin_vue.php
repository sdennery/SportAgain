<html>
<head>
    <link rel="stylesheet" href="../Vue/donnees_club.css">
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
                    <tr>
                        <td>
                            <img src="../Vue/Image/googleplus-logo.png" class="alignement" id="alignement_image"/> 
                        </td>
                        <td>
                            <p class="alignement" id="alignement_nom">
                                <strong>Nom : </strong><?php echo $vignette['nom']?>
                            </p> 
                            <p class="alignement" id="alignement_proprietaire">
                                    <strong>Nom du propriétaire : </strong><?php echo $vignette['Nom_proprietaire']?>
                                </p>
                                <p class="alignement" id="alignement_adresse">
                                <strong>Adresse : </strong><?php echo $vignette['adresse']?>
                            </p>
                            
                                <p class="alignement" id="alignement_sport">
                                    <strong>Sport : </strong><?php echo $vignette['sport']?>
                                </p>
                            
                                <p class="alignement" id="alignement_telephone">
                                    <strong>Téléphone : </strong><?php echo $vignette['telephone']?>
                            </p>
                                <p class="alignement" id="alignement_numero">
                                    <strong>Numéro club : </strong><?php echo $vignette['numero_club']?>
                                </p>
                                <p class="alignement" id="alignement_departement">
                                    <strong>Département : </strong><?php echo $vignette['Departement']?>
                                </p>
                                
                                
                                <p class="alignement" id="alignement_descriptif">
                                <strong>Descriptif : </strong><?php echo $vignette['descriptif']?>
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