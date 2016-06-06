<?php session_start();?>  

<html>
<head>
        <link rel="stylesheet" href="Page_Groupe.css">
        <meta charset="utf-8"/>
</head>
   <?php require '../Controleur/choix_header.php';?>  
   <body id="body">
        <article id="article">
            <div class="article">
            <p class="art" id="planning"> Planning </p>
            <p class="art" id="MesGroupes"> Mes groupes <br> <br> <a href="../Vue/Page_Leader_Groupe.php">Groupe</a></p>
            <p class="art" id="AideEnLigne"> Aide en ligne </p>
            <center><p class="art" id="nomGroupe">Nom du Groupe</p></center>
            <center><p class="art" id="Descriptifdugroupe">Descriptif</p></center> 
            <center><p class="art" id="NombreDeMembre">Nombre d'inscrit/Nombre de place</p></center>
            <center><p class="art" id="Chat">Chat</p></center>
            <p class="art" id="RejoindreGroupe">Rejoindre ce groupe</p>
            </div>
        </article>
<?php include("footer.php")?>
    </body>
    
</html>