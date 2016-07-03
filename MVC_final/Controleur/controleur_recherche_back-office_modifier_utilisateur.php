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
        $nombreDeVignette=nb_total_vignettes_utilisateur($requete);
        if(isset($_GET['id_utilisateur']))
        {
            $id=$_GET['id_utilisateur'];
            $vignette_utilisateur_unique =  afficher_utilisateur_unique($id);
        }else{
            $error_message="Aucun résultat !";
        }
        if($nombreDeVignette!=0)
        {
            $vignettes=get_vignettes_utilisateur($requete);
            foreach($vignettes as $cle => $vignette) 
            {
                $vignettes[$cle]['nom']=htmlspecialchars($vignette['nom']);
                $vignettes[$cle]['prenom']=htmlspecialchars($vignette['prenom']);
                $vignettes[$cle]['adresse']=htmlspecialchars($vignette['adresse']);
                $vignettes[$cle]['mail']=htmlspecialchars($vignette['mail']);
                $vignettes[$cle]['date_de_naissance']=htmlspecialchars($vignette['date_de_naissance']);
                $vignettes[$cle]['sport_favori']=htmlspecialchars($vignette['sport_favori']);
                $vignettes[$cle]['nom_utilisateur']=htmlspecialchars($vignette['nom_utilisateur']);
                $vignettes[$cle]['departement']=htmlspecialchars($vignette['departement']);
                $vignettes[$cle]['mot_de_passe']=htmlspecialchars($vignette['mot_de_passe']);
            }
        }else{
            $error_message= "Aucun résultat trouvé!";
        }
    }else{
        $error_message= "Vous n'avez saisi aucune information!";
    }
}
else{ 
    $error_message="Vous n'avez saisi aucune information!";
}
include "../Controleur/choix_header.php";  
include "../Vue/vue_back-office_modifier_utilisateur.php";
?>