<?php include_once('traitcal.php'); ?>
<?php

if (isset($_GET)){
class Date {
    
    var $days = array('Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche');
    var $months = array('Janvier', 'Fevrier', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Decembre');
  

   
    function getEvents1($anneeb) {
        if (isset($_GET['nom'])){
        global $DB;
        //$req = $DB->query('SELECT id_planning,titre,date FROM planning WHERE YEAR(date)='.$anneeb);
        $req = $DB->prepare('SELECT * FROM planning JOIN groupe ON planning.id_groupe=groupe.id_groupe WHERE nom=? AND YEAR(date)=?');
        $req -> execute(array(htmlspecialchars($_GET['nom']),$anneeb));
        $r = array();
        while($jours = $req->fetch(PDO::FETCH_OBJ)){
            
   
            $r[strtotime($jours->date)][($jours->id_planning)] = $jours->titre;
        }
        return $r;
       
    }
    
    }function getEvents2($anneeb) {
        if (isset($_GET['nom'])){
        global $DB;
        //$req = $DB->query('SELECT id_planning,titre,date FROM planning WHERE YEAR(date)='.$anneeb);
        $req = $DB->prepare('SELECT * FROM planning JOIN groupe ON planning.id_groupe=groupe.id_groupe WHERE nom=? AND YEAR(date)=?');
        $req -> execute(array(htmlspecialchars($_GET['nom']),$anneeb));
        $r = array();
        while($jours2 = $req->fetch(PDO::FETCH_OBJ)){
            
   
            $r[strtotime($jours2->date)][($jours2->id_planning)] = $jours2->lieu;
        }
        return $r;
       
    }
    
    }
    function getEvents3($anneeb) {
        if (isset($_GET['nom'])){
        global $DB;
        //$req = $DB->query('SELECT id_planning,titre,date FROM planning WHERE YEAR(date)='.$anneeb);
        $req = $DB->prepare('SELECT * FROM planning JOIN groupe ON planning.id_groupe=groupe.id_groupe WHERE nom=? AND YEAR(date)=?');
        $req -> execute(array(htmlspecialchars($_GET['nom']),$anneeb));
        $r = array();
        while($jours3 = $req->fetch(PDO::FETCH_OBJ)){
            
   
            $r[strtotime($jours3->date)][($jours3->id_planning)] = $jours3->descriptif_event;
        }
        return $r;
       
    }
    
    }
   

    function getAll($anneeb){
        $r = array();
    
        
        /**
        *
        
        $date = strtotime($anneeb.'-03-15');
        while(date('Y',$date) <= $anneeb) {
            $annee = date('Y',$date);
            $mois = date('n',$date);
            $jours = date('j',$date);
            $joursem = str_replace('0','7',date('w',$date));
            $r[$annee][$mois][$jours] = $joursem;
            $date = strtotime($date('Y-m-d',$date).' +1 DAY');
            
        }
        *
        */
        
        $date = new DateTime($anneeb.'-01-01');
        while($date->format('Y') <= $anneeb) {
            $annee = $date->format('Y');
            $mois = $date->format('n');
            $jours = $date->format('j');
            $joursem = str_replace('0','7',$date->format('w'));
            $r[$annee][$mois][$jours] = $joursem;
            $date->add(new DateInterval('P1D'));
            
        }
        
        return $r;
            
    }
}}