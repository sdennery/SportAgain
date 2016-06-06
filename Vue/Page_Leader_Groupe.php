 <?php session_start()?> 

<html>
<head>
        <link rel="stylesheet" href="Page_Leader_Groupe.css">
        <meta charset="utf-8"/>
</head>
   <?php include("../Controleur/choix_header.php");?> 
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
            <p class="art" id="MesGroupes"> Mes groupes <br> <br> <a href="../Vue/Page_Leader_Groupe.php<?php echo'?nom='.$req['nom'] ?>"><?php echo $req['nom']?></a></p>
            <p class="art" id="AideEnLigne"> Aide en ligne </p>
            
            <center><p class="art" id="nomGroupe"><b style="font-size: 56px;"><?=$req['nom']?></b></p></center>
            <center><p class="art" id="Descriptifdugroupe"><?=$req['descriptif']?></p></center> 
            <center><img class="art" id="Descriptifdugroupe2" src="../Vue/Image/<?=$req['image']?>"/></center>
            <div id="Chat" style="margin-left: 2%;background-color: blue;width: 850px;height: 400px;border:2.5px solid black;border-radius: 8px;">
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
            <p class="art" id="supprimerGroupe">Supprimer groupe</p>
            <p class="art" id="CreerEvenement"><a href="../Vue/eve.php<?php echo'?nom='.$req['nom'] ?>">Créer un évènement</a></p>
            </div>
        </article>
       <?php 
        }  }        
       ?>
<?php include("footer.php")?>
</body>    
</html>