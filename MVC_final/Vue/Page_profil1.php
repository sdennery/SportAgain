<html>
    <head>
        <link rel="stylesheet" href="../Vue/Page_Profil.css">
        <meta charset="utf-8"/>
    </head>
    <?php 
    include_once '../Modele/connect.php';?>
    <body>
        <div class="art" id="planning"> Planning 
            <?php include ('../Controleur/miniCalendrier.php') ?>
            <p id="lienPlanning"> <a href="../Controleur/calendrier.php" target="_blank"> Voir planning détaillé </a> </p>
        </div>
         <?php  $GL=$_SESSION['id'];
                $req4 = $bdd->query("SELECT * FROM utilisateur_groupe WHERE Etat=2 AND id_utilisateur=$GL");
                while ($er = $req4 -> fetch()){
        
                    ?>
            <div class="art" id="MesGroupes"> Mes groupes (Leader) <br> <br> <a href="../Vue/Page_Leader_Groupe.php<?php echo'?nom='.$er['name'] ?>"> <?php echo $er['name']?></a></div>
                <?php } ?>
                 <?php  $GL=$_SESSION['id'];
                $req6 = $bdd->query("SELECT * FROM utilisateur_groupe WHERE Etat=1 AND id_utilisateur=$GL");
                while ($err = $req6 -> fetch()){
        
                    ?>
            <div class="art" id="Mes"> Mes groupes (Membre) <br> <br> <a href="../Vue/Page_Groupe.php<?php echo'?nom='.$err['name'] ?>"><?php echo $err['name']?></a></div>
        <?php } ?> <br> <br>
        
        <div class="art" id="mesgroupes2"><b>Les derniers groupes inscrits</b> </br><?php include '../Modele/afficher_groupe_recent.php'?> </div> <div class="art" id="mesgroupes3"><b>Les derniers clubs inscrits</b> </br><?php include '../Modele/afficher_club_recent.php'?>  </div>
        <div class="art" id="mesgroupes4"><b>Les derniers évènements</b> </br> <?php include '../Modele/afficher_evenement_recent.php'?>  </div>
    </body>
    <div id="fin"><?php include('../Vue/footer.php')?></div>
</html>