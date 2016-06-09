<html>
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="../Vue/groupe(NC)2.css">
</head>

<body>
<!--Information sur le groupe, Création des menus déroulants -->
    <div class="fondBleu">
		<br>
		<br>
        <br>
        <div class="bordure">
            <p style="font-size:18px;margin-left:20%">
                <center>     
                    <strong> Recherche avancée d'un groupe </strong>
                </center>
            </p>
            <form method="GET" action="../Controleur/index_recherche_avancee_groupe.php">
                <p style="margin-left:36%;margin-top:3%">
                    Départements :    
                    <span class="espace"> 
                        <select name="departement" size="1" style="margin-left:8.2%"> 
                            <option value="0"> Lieu </option> 
                            <option value="01"> 01- Ain </option>    
                            <option value="02"> 02- Aisne </option>    
                            <option value="03"> 03- Allier </option>   
                            <option value="04"> 04- Alpes-de-Haute-Provence  </option>    
                            <option value="05"> 05- Hautes-Alpes  </option>
                            <option value="06"> 06- Alpes-Maritimes  </option>
                            <option value="07"> 07- Ardèche </option>
                            <option value="08"> 08- Ardennes </option>
                            <option value="09"> 09- Ariège </option>
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
                            <option value="65"> 65- Hautes-Pyrénées	</option>
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
                            <option value="94"> 94- Val-de-Marne</option>
                            <option value="95"> 95- Val d'Oise</option>
                            <option value="971"> 971- Guadeloupe </option>
                            <option value="972"> 972- Martinique</option>
                            <option value="973"> 973- Guyane</option>
                            <option value="974"> 974- La Réunion</option>
                            <option value="976"> 976- Mayotte</option>       
                        </select>
                    </span>
                </p>    
                <p style="margin-left:36%"> 
                    Sport : 
                    <span class="espace">
                        <select name="sport" size="1" style="margin-left:16.3%"> <option value="0"> Sport </option>
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
                        </select>
                    </span> 
                </p> 
                <p style="margin-left:36%">
                    Niveau : 
                    <span class="espace">
                        <select name="niveau" size="1" style="margin-left:14.5%"> 
                            <option value="0"> Niveaux </option>                                     
                            <option value="Débutant"> Débutant </option>
                            <option value="Intermédiaire">Intermédiaire</option> 
                            <option value="Confirmé"> Confirmé </option>
                        </select>
                    </span>
                </p>
                <p style="margin-left:36%"> 
                    Etat : 
                    <span class="espace">
                        <select name="etat" size="1" style="margin-left:17.5%">
                            <option value="Etat">Etat</option>
                            <option value="Public">Public</option>
                            <option value="Privé">Privé</option>                                
                        </select>
                    </span>    
                </p>
                <p style="margin-left:12.6%">  
                    <input type="submit" value="Valider" style="margin-left:40%" />
                </p> 
            </form>
        <?php
        if(isset($vignettes))
        {
            foreach($vignettes as $vignette)
            {
            ?>
                <table id="vignette">
                    <tr style="margin-left:25px;">
                        <td>
                            <img src="../Vue/Image/<?php echo $vignette['image']?>" class="alignement" id="alignement_image"/> 
                        </td>
                        <td>
                            <p class="alignement" id="alignement_nom">
                                <strong>
                                    <?php echo $vignette['nom']?><?php echo' ('?><?php echo $vignette['etat']?><?php echo ')'?>
                                </strong>
                            </p> 
                            <br>
                            <br>
                            <span class="alignement" id="alignement_descriptif">
                                <?php echo $vignette['descriptif']?>
                            </span>
                        </td>
                        <td>
                            <a href='../Vue/Page_Membre_Groupe.php<?php echo'?nom='.$vignette['nom']?>' id="rejoindre">
                                <strong> Accéder à la page du groupe </strong>
                            </a>
                        </td>
                        <td id="agencement">
                            <center>
                                <p class="placement">
                                    <?php echo $vignette['nombre_inscrit']?><?php echo '/'?><?php echo $vignette['nombre_place']?>
                                </p>
                                <p class="placement">
                                    <?php echo $vignette['sport']?>
                                </p>
                                <p class="placement">
                                    <?php echo $vignette['niveau']?>
                                </p>
                                <p class="placement">   
                                    <?php echo "Dép : "?>
                                    <?php echo $vignette['departement']?>
                                </p>
                            </center>
                        </td>
                    </tr>    
                </table>
                <br>
            <?php
            }
            ?>
            <?php
            echo '<p align="center">Page :';
            //Pour l'affichage, on centre la liste des pages
            for($i=1; $i<=$nombreDePages; $i++) //On fait notre boucle
            {
                //On va faire notre condition
                if($i==$pageActuelle) //Si il s'agit de la page actuelle...
                {
                    echo ' [ '.$i.' ] '; 	
                ?>	
                <?php
                }else //Sinon...
                {
                ?>            
                    <a href=<?php echo "?sport=".$_GET['sport']."&niveau=".$_GET['niveau']."&etat=".$_GET['etat']."&departement=".$_GET['departement']."&p=".$i.'"' ?>>    
                        <?php echo $i ?>
                    </a>
                <?php
                }
            }
            echo '</p>';
        }else{
            if($a=!0){
                ?>
                <center>
                <?php echo $error_message;?>
                </center>
                <?php
                if($error_message=="Aucun résultat trouvé!"){
                    echo '<p align="center">Page : 1';
                    echo '</p>';
                }
            }
        }
                ?>
        </div>
    </div>   
<br>
<br>
<br>
<!--Bas de page-->

                
</body>
</html>