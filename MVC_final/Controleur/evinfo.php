<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../Vue/tete.css">
        <meta charset="utf-8"/>
        <title> Création d'évenement </title>
    </head>
        <!--Mise en place du logo et connexion/inscription-->
        <header> 
    <?php include('../Vue/header.php'); ?>
    </header> 
        <body>
            <?php include_once '../Modele/connect.php';
        if (isset($_GET)){
        $reponse = $bdd->prepare("SELECT * FROM groupe WHERE nom = ?");
        $reponse->execute(array($_GET['nom']));
        while($req = $reponse->fetch()){?>
            <br>
            <br>
            <br>
            <br>
            <p><a href="../Vue/Page_Leader_Groupe.php<?php echo'?nom='.$req['nom']; ?>">Retour vers la page de groupe</a></p>
        <?php
        }
        if (isset($_POST) and isset($_GET['nom'])){ 
                require('../Modele/evedb.php');
                $nam = $_GET['nom'];
                $test1 = htmlspecialchars($_POST['Névénement']);
                $test2 = htmlspecialchars($_POST['lieu']);
                $test3 = htmlspecialchars($_POST['date']);
                $test4 = htmlspecialchars($_POST['descriptif']);
                                $reponse2=$DB_eve->prepare("SELECT id_groupe FROM groupe WHERE nom=? ORDER BY id_groupe DESC LIMIT 0,1");
                                $reponse2->execute(array(htmlspecialchars($nam)));
                                $take= $reponse2->fetch();
                   
                                $reponse=$DB_eve->prepare("INSERT INTO planning (id_groupe, lieu, titre, date, descriptif_event) VALUES ('".$take['id_groupe']."',?,?,?,?);");
                                $reponse->execute(array($test1,$test2,$test3,$test4));
                                /*$reponse2=$DB_eve->query('INSERT INTO planning(id_groupe) SELECT id_groupe FROM groupe WHERE nom=$nam');
                                $reponse2->execute(array($nam));*/
        }}
        ?>
    </body>
    <footer>
        <?php include('../Vue/footer.php'); ?>
    </footer>
    
</html>

