<!DOCTYPE html>
<html>
    <head>
        <title> Création d'évenement </title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="../Vue/eve.css">
    </head>
    <body>
        <header>
            <?php include_once('../Vue/header_connecte.php'); ?>
        </header>
            <div id="corps">
                <div id="planning1"><strong> Planning </strong>
                <?php include ('../Controleur/miniCalendrier.php'); ?>
                    <div id="lienPlanning"> <a href="../Controleur/calendrier.php" target="_blank"> Voir planning détaillé </a> </div>
                </div>
                <div id="tabévénement" >
                    <p class="centre"> <strong> Votre Evénement </strong> </p>
                    <br></br>
                    <form action = "../Controleur/evinfo.php" method="post"> 
                    <p>  Nom de l'événement : <span class ="espace"> <input type="text" name="Névénement" style="width:200px;height:25px"/> </span> </p>
                    <p> Lieu de l'événement :  <span class ="espace"> <input type="text" name="lieu" style="width:200px;height:25px"/> </span> </p>
                    <p> Dates de l'événement : <span class="espace"> <input type="date" name="date"/>  </span></p>
                    <br> </br>
                    <p>Description de l'événement :
                    <TEXTAREA name="descriptif_event" style="width:575px;height:200px" placeholder="Inscrivez la description de votre évènement s.v.p" >  </TEXTAREA> </p>
                    <p class="bouton" > <INPUT type="reset"  value="Reset"> </INPUT></p>
                    <p class="bouton2" > <INPUT type="submit"  value="Creer l'évenement"> </p>
                    </form>
                    </div>
                <div id = "gestionGroupe"><strong> Groupe </strong></div>
                </div>

    </body>
    
<footer style="padding-top:-100px">
            <div class="BasDePage">
            <center>
                <img src="../Vue/Image/initialefinish.png" class="picture"/>
            </center>
            <center>
            <table class="BasDePage3">
                <tr>
                    <td>
                       <a href="https://twitter.com/">
                           <img src="../Vue/Image/twitter.png" class="picture"/>
                       </a>
                    </td>
                    <td>
                       <a href="https://fr-fr.facebook.com/">
                           <img src="../Vue/Image/facebook.png" class="picture"/>
                        </a>
                    </td>
                    <td> 
                       <a href="https://plus.google.com/">
                           <img src="../Vue/Image/googleplus-logo.png" class="picture"/>
                        </a>
                    </td>
                </tr>
            </table>
            </center>
            <table class="BasdePage2">
             <tr>
                <td class="souligne"> 
                    Accueil 
                </td>
                <td> 
                    |
                </td>
                <td class="souligne">  
                    Sports
                </td>
                <td> 
                    |
                </td>
                <td class="souligne"> 
                    Qui sommes-nous ? 
                </td>
                <td> 
                    |
                </td>
                <td class="souligne"> 
                    Conditions d'utilisation
                </td>
            </tr>
        </table>
        </div>
</footer>
</html>