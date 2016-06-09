<?php session_start(); ?>
<?php
include "../Modele/connect.php";
include "../Modele/modele_administrateur.php";
$error_message2="";
if (isset($_GET))
{   
    
    if(!empty($_GET))
    {
        if (($_GET['sport'] && $_GET['departement'])!="0")
        {
            if (isset($_GET['id_club']))
            {
                $id=$_GET['id_club'];
                $vignette_club_unique =  afficher_club_unique($id);
            }else{
                $error_message="Aucun résultat !";
            }
            $vignettes_club=get_vignettes_avancee_club();
            $nombre_total_vignette = nb_total_vignettes_avancee($vignettes_club);
            if($nombre_total_vignette!=0)
            {
                foreach($vignettes_club as $cle =>$vignettes)
                {
                    $vignettes_club[$cle]['nom']=htmlspecialchars($vignettes['nom']);
                    $vignettes_club[$cle]['Nom_proprietaire']=htmlspecialchars($vignettes['Nom_proprietaire']);
                    $vignettes_club[$cle]['adresse']=htmlspecialchars($vignettes['adresse']);
                    $vignettes_club[$cle]['descriptif']=htmlspecialchars($vignettes['descriptif']);
                    $vignettes_club[$cle]['numero_club']=htmlspecialchars($vignettes['numero_club']);
                    $vignettes_club[$cle]['sport']=htmlspecialchars($vignettes['sport']);
                    $vignettes_club[$cle]['telephone']=htmlspecialchars($vignettes['telephone']);
                    $vignettes_club[$cle]['Departement']=htmlspecialchars($vignettes['Departement']);
                }
            }else{
                $error_message="Aucun résultat trouvé!";
            }
        }else{
            $error_message="Vous devez remplir tous les champs!";
        }
    }else{
        $error_message= "Vous devez remplir tous les champs!";
    }
}else{
    $error_message= "";
}
include "../Vue/vue_recherche_avancee_modifier_club.php";
?>