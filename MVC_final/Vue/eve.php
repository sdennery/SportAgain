<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <title> Création d'évenement </title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="../Vue/eve.css">
    </head>
    <body>
        <header>
            <?php include('../Controleur/choix_header.php'); ?>
        </header>
        <br>
            <div id="corps">
                <div id="planning1"><strong> Planning </strong>
                <?php include ('../Controleur/miniCalendrier.php'); ?>
                   <?php include_once '../Modele/connect.php';
                        if (isset($_GET)){
                        $reponse = $bdd->prepare("SELECT * FROM groupe WHERE nom = ?");
                        $reponse->execute(array($_GET['nom']));
                        while($req = $reponse->fetch()){ ?>
                    <div id="lienPlanning"> <a href="../Controleur/calendrier.php<?php echo'?nom='.$req['nom'] ?>" target="_blank"> Voir planning détaillé </a> </div>
                </div>
                <div id="tabévénement" >
                   
                    <p class="centre"> <strong> Votre Evénement </strong> </p>
                    <br></br>
                    <form action = "../Controleur/evinfo.php<?php echo'?nom='.$req['nom'] ?>" method="POST"> 
                    <p>  Lieu de l'événement : <span class ="espace"> <input type="text" name="Névénement" style="width:200px;height:25px" required/> </span> </p>
                    <p> Nom de l'événement :  <span class ="espace"> <input type="text" name="lieu" style="width:200px;height:25px" required/> </span> </p>
                    <p> Dates de l'événement : <span class="espace"> <input type="date" name="date" required/>  </span></p>
                    <p> Sport :  <span class ="espace"> <select name="sport" style="width:200px;height:25px" required/>
                             <option value="Athlétisme"> Athlétisme </option>
                            <option value="Aérobie"> Aérobie </option>
                            <option value="Badminton"> Badminton </option>
                            <option value="Basket-ball"> Basket-ball </option>
                            <option value="Boxe"> Boxe </option>
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
                            <option value="Tir à l'arc"> Tir à l'arc </option>
                            <option value="Trotinette"> Trotinette </option>
                            <option value="Vélo"> Vélo </option>
                            <option value="Voile"> Voile </option>
                            <option value="Volley"> Volley </option>
                            <option value="Waterpolo"> Waterpolo </option>
                            </select></span> </p>
                    <br> </br>
                    <p>Description de l'événement :
                        <TEXTAREA name="descriptif" style="width:575px;height:200px" placeholder="Inscrivez la description de votre évènement s.v.p" required>  </TEXTAREA> </p>
                    <p class="bouton" > <INPUT type="reset"  value="Reset"> </INPUT></p>
                    <p class="bouton2" > <INPUT type="submit"  value="Creer l'évenement"> </p>
                    </form>
                    </div>
                </div>
                        <?php }}?>

    </body>
    
<?php include ('../Vue/footer.php')?>
</html>