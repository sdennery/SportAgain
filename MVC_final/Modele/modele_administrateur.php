<html>
<head>
<meta charset="utf-8"/>
<script language="javascript">
function confirme(identifiant)
{
    var confirmation = confirm("Voulez vous voir les informations détaillées de ce club?")
    if (confirmation){
        document.location.href= "../Controleur/controleur_back-office_supprimer_club.php?id_club="+identifiant;    
    }
}
        
function confirme1(identifiant)
{
    var confirmation = confirm("Voulez vous supprimer ce club?")
    if (confirmation){
        document.location.href= "../Controleur/controleur_supprimer.php?id_club="+identifiant;    
    }
} 
    
function confirme21(identifiant)
{
    var confirmation = confirm("Voulez vous voir les informations détaillées de cet utilisateur?")
    if (confirmation){
        document.location.href= "../Controleur/controleur_back-office_supprimer_utilisateur.php?id_utilisateur="+identifiant;    
    }
}   
        
function confirme2(identifiant)
{
    var confirmation_utilisateur = confirm("Voulez vous vraiment supprimer cet utilisateur?")
    if (confirmation_utilisateur){
        document.location.href="../Controleur/controleur_supprimer.php?id_utilisateur="+identifiant;
    }
}
        
function confirme31(identifiant)
{
    var confirmation = confirm("Voulez vous voir les informations détaillées de ce groupe?")
    if (confirmation){
        document.location.href= "../Controleur/controleur_back-office_supprimer_groupe.php?id_groupe="+identifiant;    
    }
}   
        
function confirme3(identifiant)
{
    var confirmation_groupe = confirm("Voulez vous vraiment supprimer ce groupe?")
    if (confirmation_groupe){
        document.location.href="../Controleur/controleur_supprimer.php?id_groupe="+identifiant;
    }
}
        
function confirme41(identifiant)
{
    var confirmation = confirm("Voulez vous voir les informations détaillées de cet évènement?")
    if (confirmation){
        document.location.href= "../Controleur/controleur_back-office_supprimer_evenement.php?id_planning="+identifiant;    
    }
}   
        
function confirme4(identifiant)
{
    var confirmation_evenement = confirm("Voulez vous vraiment supprimer cet évènement?")
    if (confirmation_evenement){
        document.location.href="../Controleur/controleur_supprimer.php?id_planning="+identifiant;
    }
}
        
function club(identifiant)
{
    var confirmation_club = confirm("Voulez vous voir les informations détaillées de ce club?")
    if (confirmation_club){
        document.location.href="../Controleur/controleur_back-office_modifier_club.php?id_club="+identifiant;
    }
}
    
function club_recherche(identifiant,requete)
{
    var confirmation_club = confirm("Voulez vous voir les informations détaillées de ce club?")
    if (confirmation_club){
        document.location.href="../Controleur/controleur_recherche_back-office_modifier_club.php?requete="+requete+"&id_club="+identifiant;
    }
}
    
function club_recherche_avancee(identifiant,departement,sport)
{
    var confirmation_club = confirm("Voulez vous voir les informations détaillées de ce club?")
    if (confirmation_club){
        document.location.href="../Controleur/controleur_recherche_avancee_modifier_club.php?sport="+sport+"&departement="+departement+"&id_club="+identifiant;
    }
}
    
function club_recherche_avancee_modifier(identifiant,departement,sport)
{
    var confirmation_club = confirm("Voulez vous modifier les informations de ce club?")
    if (confirmation_club){
        document.location.href="../Vue/modification_club_recherche_avancee.php?sport="+sport+"&departement="+departement+"&id_club="+identifiant;
    }
}
    
function club_recherche_modifier(identifiant,requete)
{
    var confirmation_club = confirm("Voulez vous vraiment modifier ce club?")
    if (confirmation_club){
        document.location.href="../Vue/modification_club_recherche.php?requete="+requete+"&id_club="+identifiant;
    }
}
    
function club_modifier(identifiant)
{
    var confirmation_club = confirm("Voulez vous vraiment modifier ce club?")
    if (confirmation_club){
        document.location.href="../Vue/vue_modifier_club2.php?id_club="+identifiant;
}
}
    
function groupe_recherche_modifier(identifiant,requete)
{
    var confirmation_club = confirm("Voulez vous vraiment modifier ce groupe?")
    if (confirmation_club){
        document.location.href="../Vue/modification_groupe_recherche.php?requete="+requete+"&id_groupe="+identifiant;
    }
}
    
function groupe(identifiant)
{
    var confirmation_groupe = confirm("Voulez vous voir les informations détaillées de ce groupe?")
    if (confirmation_groupe){
        document.location.href="../Controleur/controleur_back-office_modifier_groupe.php?id_groupe="+identifiant;
    }
}
    
function groupe_modifier(identifiant)
{
    var confirmation_groupe = confirm("Voulez vous vraiment modifier ce groupe?")
    if (confirmation_groupe){
        document.location.href="../Vue/vue_modifier_groupe2.php?id_groupe="+identifiant;
}
}
   
function groupe_recherche(identifiant,requete)
{
    var confirmation_club = confirm("Voulez vous voir les informations détaillées de ce groupe?")
    if (confirmation_club){
        document.location.href="../Controleur/controleur_recherche_back-office_modifier_groupe.php?requete="+requete+"&id_groupe="+identifiant;
    }
}
    
function groupe_recherche_avancee(identifiant,sport,niveau,etat,departement)
{
    var confirmation_club = confirm("Voulez vous voir les informations détaillées de ce groupe?")
    if (confirmation_club){
        document.location.href="../Controleur/controleur_recherche_avancee_modifier_groupe.php?sport="+sport+"&niveau="+niveau+"&etat="+etat+"&departement="+departement+"&id_groupe="+identifiant;
    }
}
    
function groupe_recherche_avancee_modifier(identifiant,sport,niveau,etat,departement)
{
    var confirmation_groupe = confirm("Voulez vous modifier les informations de ce groupe?")
    if (confirmation_groupe){
        document.location.href="../Vue/modification_recherche_avancee_groupe.php?sport="+sport+"&niveau="+niveau+"&etat="+etat+"&departement="+departement+"&id_groupe="+identifiant;
    }
}
    
function utilisateur(identifiant)
{
    var confirmation_utilisateur = confirm("Voulez vous voir les informations détaillées de cet utilisateur?")
    if (confirmation_utilisateur){
        document.location.href="../Controleur/controleur_back-office_modifier_utilisateur.php?id_utilisateur="+identifiant;
    }
}
    
function utilisateur_recherche(identifiant,requete)
{
    var confirmation_club = confirm("Voulez vous voir les informations détaillées de cet utilisateur?")
    if (confirmation_club){
        document.location.href="../Controleur/controleur_recherche_back-office_modifier_utilisateur.php?requete="+requete+"&id_utilisateur="+identifiant;
    }
}

function utilisateur_recherche_avancee(identifiant,departement,sport)
{
    var confirmation_club = confirm("Voulez vous voir les informations détaillées de cet utilisateur?")
    if (confirmation_club){
        document.location.href="../Controleur/controleur_recherche_avancee_modifier_utilisateur.php?sport="+sport+"&departement="+departement+"&id_utilisateur="+identifiant;
    }
}    

function evenement(identifiant)
{
    var confirmation_evenement = confirm("Voulez vous voir les informations détaillées de cet évènement?")
    if (confirmation_evenement){
        document.location.href="../Controleur/controleur_back-office_modifier_evenement.php?id_planning="+identifiant;
    }
} 
    function evenement_recherche(identifiant,requete)
{
    var confirmation_evenement = confirm("Voulez vous voir les informations détaillées de cet évènement?")
    if (confirmation_evenement){
        document.location.href="../Controleur/controleur_recherche_back-office_modifier_evenement.php?requete="+requete+"&id_planning="+identifiant;
    }
}
    
function evenement_recherche_avancee(identifiant,sport)
{
    var confirmation_club = confirm("Voulez vous voir les informations détaillées de cet évènement?")
    if (confirmation_club){
        document.location.href="../Controleur/controleur_recherche_avancee_modifier_evenement.php?sport="+sport+"&id_planning="+identifiant;
    }
}    


function confirme51(identifiant,sport,niveau,etat,departement)
{
    var confirmation = confirm("Voulez vous voir les informations détaillées de ce groupe?")
    if (confirmation){
        document.location.href= "../Controleur/controleur_recherche_avancee_supprimer_groupe.php?sport="+sport+"&niveau="+niveau+"&etat="+etat+"&departement="+departement+"&id_groupe="+identifiant;    
    }
}
        
function confirme5(identifiant,sport,niveau,etat,departement)
{
    var confirmation = confirm("Voulez vous vraiment supprimer groupe?")
    if (confirmation){
        document.location.href= "../Controleur/controleur_supprimer_recherche_avancee.php?sport="+sport+"&niveau="+niveau+"&etat="+etat+"&departement="+departement+"&id_groupe="+identifiant;       
        }
}
        
function confirme61(identifiant,requete)
{
    var confirmation = confirm("Voulez vous voir les informations détaillées de ce groupe?")
    if (confirmation){
        document.location.href= "../Controleur/controleur_recherche_back-office_groupe.php?requete="+requete+"&id_groupe="+identifiant;    
    }
}
        
function confirme6(identifiant,requete)
{
    var confirmation = confirm("Voulez vous vraiment supprimer ce groupe?")
    if (confirmation){
        document.location.href= "../Controleur/controleur_supprimer_recherche.php?requete="+requete+"&id_groupe="+identifiant;       
    }
}
        
function confirme71(identifiant,departement,sport)
{
    var confirmation = confirm("Voulez vous voir les informations détaillées de ce club?")
    if (confirmation){
        document.location.href= "../Controleur/controleur_recherche_avancee_supprimer_club.php?departement="+departement+"&sport="+sport+"&id_club="+identifiant;    
    }
}
        
function confirme7(identifiant,sport,departement)
{
    var confirmation = confirm("Voulez vous vraiment supprimer ce club?")
    if (confirmation){
        document.location.href= "../Controleur/controleur_supprimer_recherche_avancee.php?sport="+sport+"&departement="+departement+"&id_club="+identifiant;       
    }
}
        
function confirme81(identifiant,requete)
{
    var confirmation = confirm("Voulez vous voir les informations détaillées de ce club?")
    if (confirmation){
        document.location.href= "../Controleur/controleur_recherche_back-office_club.php?requete="+requete+"&id_club="+identifiant;    
    }
}
        
function confirme8(identifiant,requete)
{
    var confirmation = confirm("Voulez vous vraiment supprimer ce club?")
    if (confirmation){
        document.location.href= "../Controleur/controleur_supprimer_recherche.php?requete="+requete+"&id_club="+identifiant;       
    }
}
        
function confirme91(identifiant,departement,sport)
{
    var confirmation = confirm("Voulez vous voir les informations détaillées de cet utilisateur?")
    if (confirmation){
        document.location.href= "../Controleur/controleur_recherche_avancee_supprimer_utilisateur.php?departement="+departement+"&sport="+sport+"&id_utilisateur="+identifiant;    
    }
} 
        
function confirme9(identifiant,sport,departement)
{
    var confirmation = confirm("Voulez vous vraiment supprimer cet utilisateur?")
    if (confirmation){
        document.location.href= "../Controleur/controleur_supprimer_recherche_avancee.php?sport="+sport+"&departement="+departement+"&id_utilisateur="+identifiant;       
    }
}
        
function confirme101(identifiant,requete)
{
    var confirmation = confirm("Voulez vous voir les informations détaillées de cet utilisateur?")
    if (confirmation){
        document.location.href= "../Controleur/controleur_recherche_back-office_utilisateur.php?requete="+requete+"&id_utilisateur="+identifiant;    
    }
}
        
function confirme10(identifiant,requete)
{
    var confirmation = confirm("Voulez vous vraiment supprimer cet utilisateur?")
    if (confirmation){
        document.location.href= "../Controleur/controleur_supprimer_recherche.php?requete="+requete+"&id_utilisateur="+identifiant;       
    }
}
        
function confirme111(identifiant,sport)
{
    var confirmation = confirm("Voulez vous voir les informations détaillées de cet évènement?")
    if (confirmation){
        document.location.href= "../Controleur/controleur_recherche_avancee_supprimer_evenement.php?sport="+sport+"&id_planning="+identifiant;    
    }
} 
        
function confirme11(identifiant,sport)
{
    var confirmation = confirm("Voulez vous vraiment supprimer cet évènement?")
    if (confirmation){
        document.location.href= "../Controleur/controleur_supprimer_recherche_avancee.php?sport="+sport+"&id_planning="+identifiant;       
    }
}
        
function confirme121(identifiant,requete)
{
    var confirmation = confirm("Voulez vous voir les informations détaillées de cet évènement?")
    if (confirmation){
        document.location.href= "../Controleur/controleur_recherche_back-office_evenement.php?requete="+requete+"&id_planning="+identifiant;    
    }
}
        
function confirme12(identifiant,requete)
{
    var confirmation = confirm("Voulez vous vraiment supprimer cet évènement?")
    if (confirmation){
        document.location.href= "../Controleur/controleur_supprimer_recherche.php?requete="+requete+"&id_planning="+identifiant;       
    }
}   
</script>
</head>
</html>
<?php
function afficher_utilisateur()
{
    global $bdd;
    $req=$bdd->prepare("SELECT * FROM utilisateur");
    $req->execute();
    $vignette1 = $req->fetchAll();
    return $vignette1;
}

function afficher_utilisateur_unique($id)
{   
    global $bdd;
    $req=$bdd->prepare('SELECT * FROM utilisateur WHERE id_utilisateur='.$id);
    $req->execute();
    $vignette2 = $req->fetchAll();
    return $vignette2;
}

function afficher_groupe()
{
    global $bdd;
    $req2=$bdd->prepare("SELECT * FROM groupe");
    $req2->execute();
    $vignette2 = $req2->fetchAll();
    return $vignette2;
}

function afficher_groupe_unique($id)
{   
    global $bdd;
    $req=$bdd->prepare('SELECT * FROM groupe WHERE id_groupe='.$id);
    $req->execute();
    $vignette = $req->fetchAll();
    return $vignette;
}

function afficher_club()
{
    global $bdd;
    $req_club=$bdd->prepare("SELECT * FROM club");
    $req_club->execute();
    $vignette3_club = $req_club->fetchAll();
    return $vignette3_club;
}

function afficher_club_unique($id)
{   
    global $bdd;
    $req=$bdd->prepare('SELECT * FROM club WHERE id_club='.$id);
    $req->execute();
    $vignette = $req->fetchAll();
    return $vignette;
}
function afficher_planning()
{
    global $bdd;
    $req4=$bdd->prepare("SELECT * FROM planning");
    $req4->execute();
    $vignette4 = $req4->fetchAll();
    return $vignette4;
}

function afficher_planning_unique($id)
{   
    global $bdd;
    $req=$bdd->prepare('SELECT * FROM planning WHERE id_planning='.$id);
    $req->execute();
    $vignette = $req->fetchAll();
    return $vignette;
}

function suppression_utilisateur($id)
{
    global $bdd;
    $suppression = $bdd->prepare('DELETE from utilisateur WHERE id_utilisateur='. $id);
    $suppression->execute(array($id));
    return $suppression;
    
}

function suppression_groupe($id)
{
    global $bdd;
    $suppression = $bdd->prepare('DELETE from groupe WHERE id_groupe='. $id);
    $suppression->execute(array($id));
    return $suppression;
}

function suppression_club($id)
{
    global $bdd;
    $suppression = $bdd->prepare('DELETE from club WHERE id_club='. $id);
    $suppression->execute(array($id));
    return $suppression;
}

function suppression_planning($id)
{
    global $bdd;
    $suppression = $bdd->prepare('DELETE from planning WHERE id_planning='. $id);
    $suppression->execute(array($id));
    return $suppression;
}

function affichage_page_groupe($id)
{
    global $bdd;
    $reponse = $bdd->prepare('SELECT * FROM groupe WHERE id_groupe='. $id);
    $reponse->execute();
    $req = $reponse->fetchAll();
    return $req;  
}

function affichage_donnees_utilisateur($id)
{
    global $bdd;
    $afficher = $bdd->prepare('SELECT * FROM utilisateur WHERE id_utilisateur='. $id);
    $afficher->execute(array($_GET['id_utilisateur']));
    $afficher_vignette=$afficher->fetchAll();
    return $afficher_vignette;
}

function affichage_donnees_club($id)
{
    global $bdd;
    $afficher = $bdd->prepare('SELECT * FROM club WHERE id_club='. $id);
    $afficher->execute(array($id));
    $afficher_vignette=$afficher->fetchAll();
    return $afficher_vignette;
}

function get_vignettes_groupe($requete)
{
    global $bdd;
    $retour_vignettes=$bdd->prepare("SELECT * FROM groupe WHERE nom LIKE '%$requete%' ORDER BY id_groupe ASC");
    $retour_vignettes->execute(array($requete));
    $vignettes = $retour_vignettes->fetchAll();
    return $vignettes;
}

function get_vignettes_club($requete)
{
    global $bdd;
    $retour_vignettes=$bdd->prepare("SELECT * FROM club WHERE nom LIKE '%$requete%' ORDER BY id_club ASC");
    $retour_vignettes->execute(array($requete));
    $vignettes = $retour_vignettes->fetchAll();
    return $vignettes;
}

function get_vignettes_utilisateur($requete)
{
    global $bdd;
    $retour_vignettes=$bdd->prepare("SELECT * FROM utilisateur WHERE nom_utilisateur LIKE '%$requete%' ORDER BY id_utilisateur ASC");
    $retour_vignettes->execute(array($requete));
    $vignettes = $retour_vignettes->fetchAll();
    return $vignettes;
}

function get_vignettes_planning($requete)
{
    global $bdd;
    $retour_vignettes=$bdd->prepare("SELECT * FROM planning WHERE titre LIKE '%$requete%' ORDER BY id_planning ASC");
    $retour_vignettes->execute(array($requete));
    $vignettes = $retour_vignettes->fetchAll();
    return $vignettes;
}

function get_vignettes_avancee_groupe(){
    global $bdd;
    $retour_vignettes=$bdd->prepare("SELECT * FROM groupe WHERE sport= ? AND niveau=? AND etat=? AND departement=?");
    $retour_vignettes->execute(array($_GET['sport'],$_GET['niveau'],$_GET['etat'],$_GET['departement']));
    $vignettes = $retour_vignettes->fetchAll();
    return $vignettes;
}

function get_vignettes_avancee_club(){
    global $bdd;
    $retour_vignettes=$bdd->prepare("SELECT * FROM club WHERE sport= ? AND departement=?");
    $retour_vignettes->execute(array($_GET['sport'],$_GET['departement']));
    $vignettes = $retour_vignettes->fetchAll();
    return $vignettes;
    }

function get_vignettes_avancee_modifier_club(){
    global $bdd;
    $retour_vignettes=$bdd->prepare("SELECT * FROM club WHERE sport= ? AND departement=?");
    $retour_vignettes->execute(array($_POST['sport'],$_POST['departement']));
    $vignettes = $retour_vignettes->fetchAll();
    return $vignettes;
    }

function get_vignettes_avancee_modifier_groupe(){
    global $bdd;
    $retour_vignettes=$bdd->prepare("SELECT * FROM groupe WHERE sport= ? AND niveau=? AND etat=? AND departement=?");
    $retour_vignettes->execute(array($_POST['sport'],$_POST['niveau'],$_POST['etat'],$_POST['departement']));
    $vignettes = $retour_vignettes->fetchAll();
    return $vignettes;
    }

function get_vignettes_avancee_utilisateur(){
    global $bdd;
    $retour_vignettes=$bdd->prepare("SELECT * FROM utilisateur WHERE sport_favori= ? AND departement=?");
    $retour_vignettes->execute(array($_GET['sport'],$_GET['departement']));
    $vignettes = $retour_vignettes->fetchAll();
    return $vignettes;
}

function get_vignettes_avancee_planning(){
    global $bdd;
    $retour_vignettes=$bdd->prepare("SELECT * FROM planning WHERE sport= ?");
    $retour_vignettes->execute(array($_GET['sport']));
    $vignettes = $retour_vignettes->fetchAll();
    return $vignettes;
}

function nb_total_vignettes_avancee($vignettes)
{
    global $bdd;
    $nbre = count($vignettes);
    return $nbre;
}

function nb_total_vignettes_groupe($requete)
{
    global $bdd;
    $reponse = $bdd->prepare("SELECT * FROM groupe WHERE nom LIKE '%$requete%' ORDER BY id_groupe ASC");
    $reponse->execute(array($requete));
    $result = $reponse->fetchAll();
    $nbre = count($result);
    return $nbre;
}

function nb_total_vignettes_club($requete)
{
    global $bdd;
    $reponse = $bdd->prepare("SELECT * FROM club WHERE nom LIKE '%$requete%' ORDER BY id_club ASC");
    $reponse->execute(array($requete));
    $result = $reponse->fetchAll();
    $nbre = count($result);
    return $nbre;
}

function nb_total_groupe()
{
    global $bdd;
    $reponse = $bdd->prepare("SELECT * FROM groupe");
    $reponse->execute();
    $result = $reponse->fetchAll();
    $nbre = count($result);
    return $nbre;
}

function nb_total_utilisateur()
{
    global $bdd;
    $reponse = $bdd->prepare("SELECT * FROM utilisateur");
    $reponse->execute();
    $result = $reponse->fetchAll();
    $nbre = count($result);
    return $nbre;
}

function nb_total_planning()
{
    global $bdd;
    $reponse = $bdd->prepare("SELECT * FROM planning");
    $reponse->execute();
    $result = $reponse->fetchAll();
    $nbre = count($result);
    return $nbre;
}

function nb_total_club()
{
    global $bdd;
    $reponse = $bdd->prepare("SELECT * FROM club");
    $reponse->execute();
    $result = $reponse->fetchAll();
    $nbre = count($result);
    return $nbre;
}

function nb_total_vignettes_planning($requete)
{
    global $bdd;
    $reponse = $bdd->prepare("SELECT * FROM planning WHERE titre LIKE '%$requete%' ORDER BY id_planning ASC");
    $reponse->execute(array($requete));
    $result = $reponse->fetchAll();
    $nbre = count($result);
    return $nbre;
}

function nb_total_vignettes_utilisateur($requete)
{
    global $bdd;
    $reponse = $bdd->prepare("SELECT * FROM utilisateur WHERE nom_utilisateur LIKE '%$requete%' ORDER BY id_utilisateur ASC");
    $reponse->execute(array($requete));
    $result = $reponse->fetchAll();
    $nbre = count($result);
    return $nbre;
}