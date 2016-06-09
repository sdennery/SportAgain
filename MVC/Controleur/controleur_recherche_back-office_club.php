<?php session_start(); ?>
<html>
<head>
    <meta charset="utf-8"/>
</head>
</html>
<?php
include "../Modele/connect.php";
include "../Modele/modele_administrateur.php";
if(isset($_GET['requete']))
{
    if(!empty($_GET['requete']))
    {
        $req=$_GET['requete'];
        $requete=htmlspecialchars($req);
        $nombreDeVignette=nb_total_vignettes_club($requete);
        if(isset($_GET['id_club']))
        {
            $id=$_GET['id_club'];
            $vignette_club_unique =  afficher_club_unique($id);
        }else{
            $error_message="";
        }
        if($nombreDeVignette!=0)
        {
            $vignettes=get_vignettes_club($requete);
            foreach($vignettes as $cle => $vignettec) 
            {
                 $vignettes[$cle]['nom']=htmlspecialchars($vignettec['nom']);
                 $vignettes[$cle]['Nom_proprietaire']=htmlspecialchars($vignettec['Nom_proprietaire']);
                 $vignettes[$cle]['descriptif']=htmlspecialchars($vignettec['descriptif']);
                 $vignettes[$cle]['adresse']=htmlspecialchars($vignettec['adresse']);
                $vignettes[$cle]['Departement']=htmlspecialchars($vignettec['Departement']);
                 $vignettes[$cle]['sport']=htmlspecialchars($vignettec['sport']);
                 $vignettes[$cle]['numero_club']=htmlspecialchars($vignettec['numero_club']);
                 $vignettes[$cle]['telephone']=htmlspecialchars($vignettec['telephone']);
            }
        }else{
            $error_message= "Aucun résultat trouvé!";
        }
    }else{
        $error_message= "Vous n'avez saisi aucune information!";
    }
}else{
    $error_message="Vous n'avez saisi aucune information!";
}
include "../Controleur/choix_header.php";  
include "../Vue/vue_back-office_supprimer_club.php";
?>