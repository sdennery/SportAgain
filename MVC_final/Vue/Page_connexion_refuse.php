<html>
    <head>
        <link rel="stylesheet" href="../Vue/Page_connexion.css">
        <meta charset="utf-8"/>
    </head>
        <!--Mise en place du logo et connexion/inscription-->
         <body>
        <!--Information pour la connexion-->
        <div class="fondBleu">
            <br> </br> <br> <br>
            <div class="bordure">
                <p style="margin-left:123px"> <strong> CONNEXION </strong> </p>
                <p style="margin-left:60px">Connexion refusée, identifiant incorrect</p>
                <form method="post" action="../Controleur/controleur_connexion.php">
                <p style="margin-left:13px"> Nom d'utilisateur :  <span class ="espace"> <input type="text" style="width:153px;height:25px" name="pseudo"/> </span> </p>
                <p style="margin-left:13px"> Mot de passe :  <span class ="espace"> <input type="password" style="width:153px;height:25px" name="motdepasse" /> </span> </p>
                <p class="decalage" style="margin-top:35px;"> Mot de passe oublié ?</p>
                <p class="centre"> <input type="submit" value="Connexion" href="lien"/> </p>
					<br>
					<br>
                </form>    
				
            </div>
            <br>
            <br>
			 <br>
			 <br>
			 <br>
        <!--Bas de page-->
        <?php include'../Vue/footer.php'?>
    </div>
    </body>
</html>