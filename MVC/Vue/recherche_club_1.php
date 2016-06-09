<?php
include "connect.php";
?>
 <html>
  <head>
   <link rel="stylesheet" href="recherche_groupe.css">
   <meta charset="utf-8"/>
</head>
<body>
<?php include("header_connecte.php") ?>
<div id="fondPage">

<?php
if (isset($_GET))
{
    if(!empty($_GET))
    {
       if (($_GET['sport'] && $_GET['niveau'] && $_GET['etat'] && $_GET['departement'])!="0")
       {
            global $bdd;  
            $reponse = $bdd->prepare('SELECT * FROM groupe WHERE sport=? AND niveau=? AND etat=? AND departement=?');
            $reponse->execute(array($_GET['sport'],$_GET['niveau'],$_GET['etat'],$_GET['departement']));
            $vignettesParPage=2;
            $SELECT_COUNT = $reponse->fetchAll();
            $nbre = count($SELECT_COUNT);
            print_r($nbre);
            if($nbre==0){
                ?>
                <center>
                    <?php echo "Aucun résultat trouvé!";?></center>
            <?php
            }
            //$retour_total=$bdd->query($SELECT_COUNT); //Nous récupérons le contenu de la requête dans $retour_total
            //$donnees_total=$retour_total->setFetMode(PDO::FETCH_ASSOC); //On range retour sous la forme d'un tableau.
            //$count=$retour_total->fetch(PDO::FETCH_ASSOC); //On récupère le total pour le placer dans la variable $total.
            //Nous allons maintenant compter le nombre de pages.
            $nombreDePages=ceil($nbre/$vignettesParPage);
                if ($nombreDePages==0){
                    $nombreDePages=1;
                }
            if(isset($_GET['p']) && !empty($_GET['p'])){
                $_GET['p']=intval($_GET['p']);
                if($_GET['p']>$nombreDePages){
                    $pageActuelle = $nombreDePages;
                }else{
                    $pageActuelle=$_GET['p'];
                }
            }else{
                $pageActuelle = 1;
            }
            $premiereEntree=($pageActuelle-1)*$vignettesParPage; // On calcul la première entrée à lire
            $retour_vignettes=$bdd->prepare("SELECT * FROM groupe WHERE sport= ? AND niveau=? AND etat=? AND departement=? LIMIT $premiereEntree, $vignettesParPage");
            $retour_vignettes->execute(array($_GET['sport'],$_GET['niveau'],$_GET['etat'],$_GET['departement']));
            while($donnees= $retour_vignettes->fetch())
            {
                ?>
                <table id="vignette">
                <tr style="margin-left:25px;">
                <td> <img src="googleplus-logo.png" class="alignement" id="alignement_image"/> </td>
                <td> <p class="alignement" id="alignement_nom"> <strong><?php echo $donnees['nom']?><?php echo' ('?><?php echo $donnees['etat']?><?php echo ')'?></strong></p> <br> <br> <span class="alignement" id="alignement_descriptif"><?php echo $donnees['descriptif']?>
                    </span></td>
                <td> <a href="#" id="rejoindre"> <strong>  Accéder à la page du groupe </strong> </a> </td>
                
                <td id="agencement"><center>
                    <p class="placement"><?php echo $donnees['nombre_inscrit']?><?php echo '/'?><?php echo $donnees['nombre_place']?></p>
                <p class="placement">
                    <?php echo $donnees['sport']?>
                </p>
                    <p class="placement"><?php echo $donnees['niveau']?></p>
                    <p class="placement"><?php echo "Dép : "?><?php echo $donnees['departement']?></p></center></td>
                </tr>    
                </table>;
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
                    <a href=<?php echo "?sport=".$_GET['sport']."&niveau=".$_GET['niveau']."&etat=".$_GET['etat']."&departement=".$_GET['departement']."&p=".$i.'"' ?>><?php echo $i ?></a>
                    <?php
                }
            }
            echo '</p>';
       }else{
           ?>
           <center><?php echo "Veuillez saisir tous les champs!";?></center>
           <?php
    }
    }
}
?>
   </div> 
   
    <?php
    include("footer.php") ?>
    
     </body>
</html>