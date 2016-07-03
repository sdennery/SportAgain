<html>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="../Vue/creergroupe.css">
    </head>
    <?php include "../Vue/header.php";?>
     <?php 
        /*
        include("header_connecte.php");
         * 
         */
       try
        {
           $bdd = new PDO("mysql:host=localhost;dbname=sport'again;charset=utf8", 'root', '');
        }
           catch(Exception $e)
        {
                die('Erreur : '.$e->getMessage());
        }
        
    if(isset($_GET['id_groupe']))
    {
        
        $id=$_GET['id_groupe'];
        $reponse = $bdd->query('SELECT * FROM groupe WHERE id_groupe='.$id);
    
    while ($donnees = $reponse->fetch())
{
 ?>

   
    <body>
        <!--Création d'un groupe-->
        <div class="fondBleu">
            <br> 
            <div class="bordure">
                <p> <strong class="centretext"> CREER VOTRE GROUPE </strong> </p>
                <form method="post" action="../Controleur/controleur_modifier_recherche_avancee_groupe.php">
                    <p> Type de groupe : <select class="placement" name="etat" > 
                            <option value="<?php echo $donnees['etat']?>" selected><?php echo $donnees['etat']?></option>
                            <option value="Privé" required >Privé <br>  </option>
                           <span class="placement2"> <option value="Public" > Public <br> </option> </span> </select> </p>
                           
                           <p> Nom du groupe :  <span class ="espace"> <input type="text" style="width:153px;height:25px" name="nom" required="" value="<?php echo $donnees['nom']?>" </span> </p>
                    <p> Sport(s) favori(s) : <span class ="espace"> <select name="sport" size="1" style="width:153px;height:25px" > 
                               
                            <option value="<?php echo $donnees['sport']?>" selected><?php echo $donnees['sport']?></option>
                            <option value="athletisme"> Athlétisme </option>
                            <option value="aerobie"> Aérobie </option>
                            <option value="basdminton"> Basdminton </option>
                            <option value="boxe"> Boxe </option>
                            <option value="basketball"> Basket-ball </option>
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
                            <option value="marcheRapide"> Marche rapide </option>
                            <option value="musculation"> Musculation </option>
                            <option value="natation"> Natation </option>
                            <option value="paddle"> Paddle </option>
                            <option value="parachute"> Parachute </option>
                            <option value="peche"> Pêche </option>
                            <option value="petanque"> Pétanque </option>
                            <option value="plongee"> Plongée </option>
                            <option value="randonnee"> Randonnée </option>
                            <option value="roller"> Roller </option>
                            <option value="rubgy"> Rugby </option>
                            <option value="running"> Running </option>
                            <option value="runningTrail"> Running Trail </option>
                            <option value="skateboard"> Skateboard </option>
                            <option value="ski"> Ski </option>
                            <option value="snowboard"> Snowboard </option>
                            <option value="speleologie"> Spéléologie </option>
                            <option value="squash"> Squash </option>
                            <option value="surf"> Surf </option>
                            <option value="tenis"> Tennis </option>
                            <option value="tennisDeTable"> Tennis de table </option>
                            <option value="tirALacr"> Tir à l'arc </option>
                            <option value="trotinette"> Trotinette </option>
                            <option value="velo"> Vélo </option>
                            <option value="voile"> Voile </option>
                            <option value="volley"> Volley </option>
                            <option value="waterpolo"> Waterpolo </option>
                            </select> </span> </p>
                    <p> Nombre de place max : <span class="espace"> <select name="nombre" size="1" style="width:153px;height:25px"> 
                    <option value="<?php echo $donnees['nombre_place']?>" selected><?php echo $donnees['nombre_place']?></option>
                    <option value="5"> 5 </option> 
                    <option value="10"> 10 </option> 
                    <option value="20"> 20 </option> 
                    <option value="50"> 50 </option> 
                    </select> 
                    </span>
                    </p>
                    <p> Département :  <select name="departement" size="1" style="width:153px;height:25px" class="espace"> 
                            <option value="<?php echo $donnees['departement']?>" selected><?php echo $donnees['departement']?></option>
                            <option value="0"> Département </option>
                            <option value="1">01 - Ain</option>
                            <option value="2"> 02- Aisne </option>    
                            <option value="3"> 03- Allier </option>   
                            <option value="4"> 04- Alpes-de-Haute-Provence  </option>    
                            <option value="5"> 05- Hautes-Alpes  </option>
                            <option value="6"> 06- Alpes-Maritimes  </option>
                            <option value="7"> 07- Ardèche </option>
                            <option value="8"> 08- Ardennes </option>
                            <option value="9"> 09- Ariège </option>
                            <option value="10"> 10- Aube </option>
                            <option value="11"> 11- Aude </option>
                            <option value="12"> 12- Aveyron </option>
                            <option value="13"> 13- Bouches-du-Rhône </option>
                            <option value="14"> 14- Calvados</option>
                            <option value="15"> 15- Cantal</option>
                            <option value="16"> 16- Charente</option>
                            <option value="17"> 17- Charente-maritime</option>
                            <option value="18"> 18- Cher</option>
                            <option value="19"> 19- Corrèze</option>
                            <option value="20"> 20- Corse</option>
                            <option value="21"> 21- Côte-d'Or</option>
                            <option value="22"> 22- Côtes d'Armor</option>
                            <option value="23"> 23- Creuse</option>
                            <option value="24"> 24- Dordogne</option>
                            <option value="25"> 25- Doubs</option>
                            <option value="26"> 26- Drôme</option>
                            <option value="27"> 27- Eure</option>
                            <option value="28"> 28- Eure-et-Loir</option>
                            <option value="29"> 29- Finistère</option>
                            <option value="30"> 30- Gard</option>
                            <option value="31"> 31- Haute-Garonne</option>
                            <option value="32"> 32- Gers</option>
                            <option value="33"> 33- Gironde</option>
                            <option value="34"> 34- Hérault</option>
                            <option value="35"> 35- Ille-et-Vilaine</option>
                            <option value="36"> 36- Indre</option>
                            <option value="37"> 37- Indre-et-Loire </option>
                            <option value="38"> 38- Isère</option>
                            <option value="39"> 39- Jura</option>
                            <option value="40"> 40- Landes</option>
                            <option value="41"> 41- Loir-et-Cher</option>
                            <option value="42"> 42- Loire</option>
                            <option value="43"> 43- Haute-Loire</option>
                            <option value="44"> 44- Loire-Atlantique</option>
                            <option value="45"> 45- Loiret</option>
                            <option value="46"> 46- Lot</option>
                            <option value="47"> 47- Lot-et-Garonne</option>  
                            <option value="48"> 48- Lozère</option>
                            <option value="49"> 49- Maine-et-Loire</option>                              
                            <option value="50"> 50- Manche</option>
                            <option value="51"> 51- Marne</option>
                            <option value="52"> 52- Haute-Marne</option>
                            <option value="53"> 53- Mayenne</option>
                            <option value="54"> 54- Meurthe-et-Moselle</option>
                            <option value="55"> 55- Meuse</option>
                            <option value="56"> 56- Morbihan</option>
                            <option value="57"> 57- Moselle</option>
                            <option value="58"> 58- Nièvre</option>
                            <option value="59"> 59- Nord</option>
                            <option value="60"> 60- Oise</option>
                            <option value="61"> 61- Orne	</option>
                            <option value="62"> 62- Pas-de-Calais</option>
                            <option value="63"> 63- Puy-de-Dôme</option>
                            <option value="64"> 64- Pyrénées-Atlantiques</option>
                            <option value="65"> 65- 	Hautes-Pyrénées	</option>
                            <option value="66"> 66- Pyrénées-Orientales</option>
                            <option value="67"> 67- Bas-Rhin</option>
                            <option value="68"> 68- Haut-Rhin</option>
                            <option value="69"> 69- Rhône</option>
                            <option value="70"> 70- Haute-Saône</option>
                            <option value="71"> 71- Saône-et-Loire</option>
                            <option value="72"> 72- Sarthe</option>
                            <option value="73"> 73- Savoie</option>
                            <option value="74"> 74- Haute-Savoie</option>
                            <option value="75"> 75- Paris</option>
                            <option value="76"> 76- Seine-Maritime</option>
                            <option value="77"> 77- Seine-et-Marne</option>
                            <option value="78"> 78- Yvelines</option>
                            <option value="79"> 79- Deux-Sèvres</option>
                            <option value="80"> 80- Somme</option>
                            <option value="81"> 81- Tarn</option>
                            <option value="82"> 82- Tarn-et-Garonne</option>
                            <option value="83"> 83- Var</option>
                            <option value="84"> 84- Vaucluse</option>
                            <option value="85"> 85- Vendée</option>
                            <option value="86"> 86- Vienne</option>
                            <option value="87"> 87- Haute-Vienne</option>
                            <option value="88"> 88- Vosges</option>
                            <option value="89"> 89- Yonne</option>
                            <option value="90"> 90- Territoire-de-Belfort</option>
                            <option value="91"> 91- Essonne</option>
                            <option value="92"> 92- Hauts-de-Seine</option>
                            <option value="93"> 93- Seine-Saint-Denis</option>
                            <option value="94"> 94- Essonne</option>
                            <option value="95"> 95- Essonne</option>
                            <option value="971"> 971- Guadeloupe </option>
                            <option value="972"> 972- Martinique</option>
                            <option value="973"> 973- Guyane</option>
                            <option value="974"> 974- La Réunion</option>
                            <option value="976"> 976- Mayotte</option> </select>  </p>
                    <p> Niveau :  <select name="niveau" size="1" style="width:153px;height:25px" class="espace">  <option value="debutant"> Débutant </option> 
                            <option value="<?php echo $donnees['niveau']?>" selected><?php echo $donnees['niveau']?></option>
                            <option value="intermediaire">Intermédiaire</option> 
                            <option value="confirme"> Confirmé </option></select></p>
                    <p> Descriptif du groupe : </p>
                    <p> <TEXTAREA  rows=8 style="width:360px;height:120px" name="description" required> <?php echo $donnees['descriptif'] ?></TEXTAREA> </p>
                    <p>ID groupe :</p>
                <p>
                    <select name="id_groupe" style="margin-top:-35px;margin-left:210px;">
                        <option value="<?php echo $donnees['id_groupe']?>" selected><?php echo $donnees['id_groupe']?></option>
                    </select>
                </p>
                    <p class="centre"> <input type="submit" value="Valider"/> </p>

            <?php
                  } 
           
// Fin de la boucle pour l'affichage des donnée dans la base de donnée
    $reponse->closeCursor();

}                
                 ?>
                </form> 
            
            </div>
     
</div>
		<?php 
    include "../Vue/footer.php";
    ?> 
</body>
</html>