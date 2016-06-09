<?php session_start();?>
<html>
<head>
        <link rel="stylesheet" href="Page_Leader_Groupe.css">
        <meta charset="utf-8"/>
</head>
   <?php include("../Controleur/choix_header.php")?> 
<!-- -connexion avec la base de donnée + requete pour afficher les info du groupe-->
    <?php
        include_once '../Modele/connect.php';
        if (isset($_GET)){
        $reponse = $bdd->prepare("SELECT * FROM groupe WHERE nom = ?");
        $reponse->execute(array($_GET['nom']));
        while($req = $reponse->fetch()){
    ?>
<body id="body"
        <article id="article">
            <div class="article">
            <div class="art" id="planning"> Planning 
            <?php include ('../Controleur/miniCalendrier.php') ?>
                <p id="lienPlanning"> <a href="../Controleur/calendrier.php<?php echo'?nom='.$req['nom'] ?>" target="_blank"> Voir planning détaillé </a> </p>
                </div>
                <br><br><br>
                
            </div>
            <?php /* $GL=$_SESSION['id'];
                $req4 = $bdd->query("SELECT * FROM utilisateur_groupe WHERE Etat=2 AND id_utilisateur=$GL");
                while ($er = $req4 -> fetch()){
        
                    ?>
            <p class="art" id="MesGroupes"> Mes groupes (Leader) <br> <br> <a href="../Vue/Page_Leader_Groupe.php<?php echo'?nom='.$req['nom'] ?>"><?php echo $er['name']?></a>
                <?php }?><?php  $GL=$_SESSION['id'];
                $req6 = $bdd->query("SELECT * FROM utilisateur_groupe WHERE Etat=1 AND id_utilisateur=$GL");
                while ($err = $req6 -> fetch()){
        
                    ?>
            <p class="art" id="Mes"> Mes groupes (Membre) <br> <br> <a href="../Vue/Page_Membre_Groupe.php<?php echo'?nom='.$req['nom'] ?>"><?php echo $err['name']?></a></p>
            <?php } */?>
            <center><p class="art" id="nomGroupe"><b style="font-size: 56px;"><?=$req['nom']?></b></p></center>
            <center><p class="art" id="Descriptifdugroupe"><?=$req['descriptif']?></p></center> 
            <center><img class="art" id="Descriptifdugroupe2" src="../Vue/Image/<?=$req['image']?>"/></center>
            <div id="Chat" style="margin-left: 2%;background-image: url('../Vue/Images/changer-fond-ecran-windows_01.jpg');
    background-position: bottom;width: 850px;height: 400px;border:2.5px solid black;border-radius: 8px;">
            <br><br>
            <form method="POST" action="">
            <div style="margin-left: 5%;background-color: #fff;width: 760px;height: 300px;overflow: auto;">
                    <?php include'../Controleur/chat_controleur.php';?>
                </div>
            <br>
            <input type="text" placeholder="Pseudo" name="pseudo" style="margin-left: 10%;"/>
            <input type="text" placeholder="message" name="message" style="width: 300px;margin-left: 1%"/>
            <input type="submit" value="Envoyer" style="margin-left: 1%;"/>
        </form> 
                </div>
            <p class="art" id="CreerEvenement" style="margin-left: 250px;"><a href="../Vue/Page_Groupe.php<?php echo'?nom='.$req['nom'] ?>">Rejoindre ce groupe </a></p>
            </div>
        </article>
       <?php 
        }  }        
       ?>
<?php include("footer.php")?>
</body>    
</html>