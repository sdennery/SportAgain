<html>
    <head>
        <link rel="stylesheet" href="Page_inscription.css">
        <meta charset="utf-8"/>
    </head>
        <!--Mise en place du logo et connexion/inscription-->
    <?php 
        include("header.php");
    ?> 
    <body>
        <!--Information pour l'inscription--> 
        <div class="fondBleu">
            <br> </br>
            <div class="bordure">
                <p class="centre"> <strong> INSCRIPTION </strong> </p>
                <br></br>
                <form method="post" action="">
                <p> Nom d'utilisateur :  <span class ="espace"> <input type="text" style="width:153px;height:25px" name="pseudo" /> </span> </p>
                <p> Mot de passe :  <span class ="espace"> <input type="password" style="width:153px;height:25px" name="motdepasse"/> </span> </p>
                <p> Confirmer mot de passe : <span class ="espace"> <input type="password" style="width:153px;height:25px" name="motdepasse"/> </span> </p>
                <p> Nom :  <span class ="espace"> <input type="text" style="width:153px;height:25px" name="nom"/> </span> </p>
                <p> Prénom : <span class ="espace"> <input type="text" style="width:153px;height:25px" name="prénom"/> </span> </p>
                <p> Adresse : <span class ="espace"> <TEXTAREA name=Adresse rows=3 style="width:153px;height:45px" name="adresse"> </TEXTAREA> </span> </p>
                <br> </br>
                <p> Mail :  <span class ="espace"> <input type="email" style="width:153px;height:25px" name="email"/> </span> </p>
                <p> Sport(s) favori(s) : <span class ="espace"> <select name="Sport" size="1" style="width:153px;height:25px"> <option value="0"> Sport </option>
                            <option value="0"> Sport </option>
                            <option value='1'> Athlétisme </option>
                            <option value="2"> Aérobie </option>
                            <option value="3"> Basdminton </option>
                            <option value="4"> Basket-ball </option>
                            <option value="5"> Boxe </option>
                            <option value="6"> Basket-ball </option>
                            <option value="7"> Cardio </option>
                            <option value="8"> Danse </option>
                            <option value="9"> Equitation </option>
                            <option value="10"> Escalade </option>
                            <option value="11"> Foot US </option>
                            <option value="12"> Football </option>
                            <option value="13"> Handball </option>
                            <option value="14"> Hockey </option>
                            <option value="15"> Kayak </option>
                            <option value="16"> Kite surf </option>
                            <option value="17"> Marche nordique </option>
                            <option value="18"> Marche rapide </option>
                            <option value="19"> Musculation </option>
                            <option value="20"> Natation </option>
                            <option value="21"> Paddle </option>
                            <option value="22"> Parachute </option>
                            <option value="23"> Pêche </option>
                            <option value="24"> Pétanque </option>
                            <option value="25"> Plongée </option>
                            <option value="26"> Randonnée </option>
                            <option value="27"> Roller </option>
                            <option value="28"> Rugby </option>
                            <option value="29"> Running </option>
                            <option value="30"> Running Trail </option>
                            <option value="31"> Skateboard </option>
                            <option value="32"> Ski </option>
                            <option value="33"> Snowboard </option>
                            <option value="34"> Spéléologie </option>
                            <option value="35"> Squash </option>
                            <option value="36"> Surf </option>
                            <option value="37"> Tennis </option>
                            <option value="38"> Tennis de table </option>
                            <option value="39"> Tir à l'arc </option>
                            <option value="40"> Trotinette </option>
                            <option value="41"> Vélo </option>
                            <option value="42"> Voile </option>
                            <option value="43"> Volley </option>
                            <option value="44"> Waterpolo </option>
                            </select> </span> </p>
                <p class="color"> Ajouter un autre sport</p>
                <br> </br>
                <p> Date de naissance : <span class="espace"> <input type="date" name="date" style="width:153px;height:25px" name="Inscription"> </span> </p>
                <p> Sexe : <span class="placement"> <input type="radio" name="sexe"> Homme <br>  </span>
                <span class="placement2"> <input type="radio" name="sexe"> Femme <br> </span> </p>
                <p class="decalage"> <input type="checkbox" name="condition" > J'accepte les <span class="couleur"> conditions d'utilisation </span> </p>
                <p class="centre"> <input type="submit" value="Confirmer"/> </p>
                </form>
            </div>   
            <br> </br>
            <br>
            <?php include("footer.php") ?> 
</body>
</html>
        