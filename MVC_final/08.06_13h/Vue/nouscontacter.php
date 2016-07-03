<html>
<head>
        <link rel="stylesheet" href="nouscontacter.css">
        <title >Nous Contacter</title>
        <meta charset="utf-8" />
    </head>
        <!--Mise en place du logo et connexion/inscription-->
        <header> 
           <?php include('../Controleur/choix_header.php'); ?>
    </header>
    <body onload="initialize()">
            <div id="corps">
                <div id="Mfixe">
                <p><a href="#aide_en_ligne"> <img class="im_aide" src="../Vue/Image/aide-index-aide-en-ligne-point-interrogation-icone-6583-128.png" /> </a> </p>
                <p><a href="#renseignement"> <img class="im_renseignement" src=../Vue/Image/renseignement-265x300.jpg /> </a> </p>
                <p><a href="#nous_contacter"><img class="im_email" src="../Vue/Image/Email.jpg" />  </a> </p>

                </div>
                <div id="tabcontact" > 
                    <div id="aide_en_ligne">
                    <strong> Aide en ligne</strong>
                    <p> Obtenir une réponse instantanée : </p>
                <p> <li> Nous vous suggérons de consulter la foire aux questions qui comporte de nombreuses réponses à vos questions. </li> </p>  <p> <li> <a href="eve.php"> Questions fréquentes (FAQ)</a> </li> </p>
                    </div>
                    <div id="renseignement">
                        <strong> Informations utiles </strong>
                        <li> Pour nous contacter : tel 0X XX XX XX XX</li>
                        <li> Société Web Design </li>
                        <li> <a href="map.php"> acceder au plan </a></li>

                    </div>
                <p> <div id="nous_contacter">
                    <strong> Nous Contacter </strong></p>
                    <form action = "../modele/SourceContact.php" method="post"> 
                        <select name="civilité"  data-placeholder="CIVILITÉ*">
                        <option value="Ms">Mademoiselle</option>
                        <option value="Mrs">Madame</option>
                        <option value="Mr">Monsieur</option>
                        </select>
                            <span  class="ecart"> <input type="text" name="nom" placeholder="Nom*" style="width:200px;height:25px"/> </span> <span  class="ecart">  <input type="text" name="prenom" placeholder="prénom*" style="width:200px;height:25px"/> </span>
                    <p> <span class="cran"> <input type="email" name="email" placeholder="email*" style="width:200px;height:25px"> </span> </p>
                    <br></br>
                    <p> Objet :</p>
                    <p> <input type="text" name="objet" placeholder="Titre de votre message*" style="width:80%;height:25px"> </p>
                    <p> Ennoncé de votre demande : </p>
                    <TEXTAREA name="message" style="width:575px;height:200px" placeholder="Inscrivez la description de votre demande s.v.p" >  </TEXTAREA> 
                    <p class="bouton" > <INPUT type="reset"  value="Reset"> </INPUT></p>
                    <p class="bouton2" > <INPUT type="submit"  value="envoyer courriel"> </INPUT> </p>
                    </form>
                </div>
                </div>
                
    </body>
    

    
</html>