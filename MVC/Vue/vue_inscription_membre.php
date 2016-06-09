<html>
    <head>
        <link rel="stylesheet" href="inscription_membre.css">
        <meta charset="utf-8"/>
    </head>
        <!--Mise en place du logo et connexion/inscription-->
    <?php include'../Vue/header.php';?>
    <body>
        <!--Information pour l'inscription--> 
        <div class="fondBleu">
            <br> </br>
            <div class="bordure">
                <p class="centre"> <strong> INSCRIPTION </strong> </p>
                <br></br>
                <form method="post" action="../Controleur/controleur_inscription.php">
                    <p> Nom d'utilisateur :  <span class ="espace"> <input type="text" style="width:153px;height:25px" name="pseudo" required/> </span> </p>
                <p> Mot de passe :  <span class ="espace"> <input type="password" style="width:153px;height:25px" name="password" required/> </span> </p>
                <p> Confirmer mot de passe : <span class ="espace"> <input type="password" style="width:153px;height:25px" name="password1" required/> </span> </p>
                <p> Nom :  <span class ="espace"> <input type="text" style="width:153px;height:25px" name="nom" required/> </span> </p>
                <p> Prénom : <span class ="espace"> <input type="text" style="width:153px;height:25px" name="prenom" required/> </span> </p>
                <p> Adresse : <span class ="espace"> <TEXTAREA name=adresse rows=3 style="width:153px;height:45px" name="adresse"> </TEXTAREA> </span> </p>
                <br> </br>
                <p> Mail :  <span class ="espace"> <input type="email" style="width:153px;height:25px" name="mail" required/> </span> </p>
                <p> Sport(s) favori(s) : <span class ="espace"> <select name="sport" size="1" style="width:153px;height:25px" required> <option value="sport"> Sport </option>
                            <option value="athletisme"> Athlétisme </option>
                            <option value="aerobie"> Aérobie </option>
                            <option value="basdminton"> Basdminton </option>
                            <option value="basketball"> Basket-ball </option>
                            <option value="boxe"> Boxe </option>
                           
                            <option value="cardio"> Cardio </option>
                            <option value="danse"> Danse </option>
                            <option value="equitation"> Equitation </option>
                            <option value="escalade"> Escalade </option>
                            <option value="footUS"> Foot US </option>
                            <option value="football"> Football </option>
                            <option value="handball"> Handball </option>
                            <option value="hockey"> Hockey </option>
                            <option value="kayak"> Kayak </option>
                            <option value="kiteSurf"> Kite surf </option>
                            <option value="marcheNordique"> Marche nordique </option>
                            <option value="MarcheRapide"> Marche rapide </option>
                            <option value="musculation"> Musculation </option>
                            <option value="natation"> Natation </option>
                            <option value="paddle"> Paddle </option>
                            <option value="parachute"> Parachute </option>
                            <option value="peche"> Pêche </option>
                            <option value="petanque"> Pétanque </option>
                            <option value="plongee"> Plongée </option>
                            <option value="randonnee"> Randonnée </option>
                            <option value="roller"> Roller </option>
                            <option value="rugby"> Rugby </option>
                            <option value="running"> Running </option>
                            <option value="runningTrail"> Running Trail </option>
                            <option value="skateboard"> Skateboard </option>
                            <option value="ski"> Ski </option>
                            <option value="snowboard"> Snowboard </option>
                            <option value="speleologie"> Spéléologie </option>
                            <option value="squash"> Squash </option>
                            <option value="surf"> Surf </option>
                            <option value="tennis"> Tennis </option>
                            <option value="tennisDeTable"> Tennis de table </option>
                            <option value="tirAlArc"> Tir à l'arc </option>
                            <option value="trotinette"> Trotinette </option>
                            <option value="velo"> Vélo </option>
                            <option value="voile"> Voile </option>
                            <option value="volley"> Volley </option>
                            <option value="waterpolo"> Waterpolo </option>
                            </select> </span> </p>
                <p class="color"> Ajouter un autre sport</p>
                <br> </br>
                <p> Date de naissance : <span class="espace"> <input type="date" name="date" style="width:153px;height:25px" required> </span> </p>
                <p> Sexe : <span class="placement"> <input type="radio" name="sexe"> Homme <br>  </span>
                <span class="placement2"> <input type="radio" name="sexe" required> Femme <br> </span> </p>
                <p class="decalage"> <input type="checkbox" name="condition" required> J'accepte les <span class="couleur"> conditions d'utilisation </span> </p>
                <p class="centre"> <input type="submit" value="Confirmer"/> </p>
                </form>
            </div>   
            <br> </br> <br> <br>
        <?php include'../Vue/footer.php'?>     
</body>
</html>


