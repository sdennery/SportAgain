<?php
include "../Modele/connect.php";
include "../Modele/fonction_groupe.php";
include "../Modele/fonction_club.php";
include "../Modele/fonction_evenement.php";
   if(isset($_GET)){
    if(!empty($_GET)){
        if($_GET['choix']=="club" && isset($_GET['requete'])){
            if(!empty($_GET['requete'])){
                $req=$_GET['requete'];
                $vignettesParPage=2;
                $requete=htmlspecialchars($req); 
                $nombreDePages=nb_total_vignettes_club($vignettesParPage,$requete);
                if($nombreDePages!=0){
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
                $premiereEntree=($pageActuelle-1)*$vignettesParPage; 
                $vignettes=get_vignettes_club($premiereEntree,$vignettesParPage,$requete);
                //print_r($vignettes);
                foreach($vignettes as $cle => $vignette) 
                {
                $vignettes[$cle]['nom']=htmlspecialchars($vignette['nom']);
                $vignettes[$cle]['Nom_proprietaire']=htmlspecialchars($vignette['Nom_proprietaire']);
                $vignettes[$cle]['descriptif']=htmlspecialchars($vignette['descriptif']);
                $vignettes[$cle]['adresse']=htmlspecialchars($vignette['adresse']);
                $vignettes[$cle]['Departement']=htmlspecialchars($vignette['Departement']);
                $vignettes[$cle]['sport']=htmlspecialchars($vignette['sport']);
                $vignettes[$cle]['numero_club']=htmlspecialchars($vignette['numero_club']);
                $vignettes[$cle]['telephone']=htmlspecialchars($vignette['telephone']);
            }
            include "../Vue/recherche_club2.php";   
        }else{
            $error_message= "Aucun résultat trouvé!";
        }
    }else{
        $error_message= "Vous n'avez saisi aucune information!";
    }
}  
        if($_GET['choix']=="groupe" && isset($_GET['requete'])){
            if(!empty($_GET['requete'])){
        $req=$_GET['requete'];
        $vignettesParPage=2;
        $requete=htmlspecialchars($req); 
        $nombreDePages=nb_total_vignettes($vignettesParPage,$requete);
        if($nombreDePages!=0){
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
            $premiereEntree=($pageActuelle-1)*$vignettesParPage; 
            $vignettes=get_vignettes($premiereEntree,$vignettesParPage,$requete);
            //print_r($vignettes);
            foreach($vignettes as $cle => $vignette) 
            {
                $vignettes[$cle]['nom']=htmlspecialchars($vignette['nom']);
                $vignettes[$cle]['etat']=htmlspecialchars($vignette['etat']);
                $vignettes[$cle]['descriptif']=htmlspecialchars($vignette['descriptif']);
                $vignettes[$cle]['nombre_inscrit']=htmlspecialchars($vignette['nombre_inscrit']);
                $vignettes[$cle]['nombre_place']=htmlspecialchars($vignette['nombre_place']);
                $vignettes[$cle]['sport']=htmlspecialchars($vignette['sport']);
                $vignettes[$cle]['niveau']=htmlspecialchars($vignette['niveau']);
                $vignettes[$cle]['departement']=htmlspecialchars($vignette['departement']);
            }
            include "../Vue/recherche_groupe.php";   
        }else{
            $error_message= "Aucun résultat trouvé!";
        }
    }else{
        $error_message= "Vous n'avez saisi aucune information!";
    }
}
else{ 
    $error_message="";
}
   
        if($_GET['choix']=="evenement" && isset($_GET['requete'])){
            $req=$_GET['requete'];
                $vignettesParPage=2;
                $requete=htmlspecialchars($req); 
                $nombreDePages=nb_total_vignettes_evenement($vignettesParPage,$requete);
                if($nombreDePages!=0){
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
                $premiereEntree=($pageActuelle-1)*$vignettesParPage; 
                $vignettes=get_vignettes_evenement($premiereEntree,$vignettesParPage,$requete);
                //print_r($vignettes);
                foreach($vignettes as $cle => $vignette) 
                {
                $vignettes[$cle]['titre']=htmlspecialchars($vignette['titre']);
                $vignettes[$cle]['lieu']=htmlspecialchars($vignette['lieu']);
                $vignettes[$cle]['horaire']=htmlspecialchars($vignette['horaire']);
                $vignettes[$cle]['description']=htmlspecialchars($vignette['description']);
                $vignettes[$cle]['nb_place']=htmlspecialchars($vignette['nb_place']);
                $vignettes[$cle]['sport']=htmlspecialchars($vignette['sport']);
            }
            include "../Vue/recherche_evenement.php";   
        }else{
            $error_message= "Aucun résultat trouvé!";
        }
    }else{
        $error_message= "Vous n'avez saisi aucune information!";
    }
        if($_GET['choix']=="0" && isset($_GET['requete'])){
        }
    }else{
        echo "rt";
        include "../Vue/body-acceuil.php";
    }
   }else{
       echo "oui";
   }
?>