<?php
    
    if (isset($_POST['pseudo']) and isset($_POST['message']) and !empty($_POST['pseudo']) and !empty($_POST['message'])){
    $pseudo2=  htmlspecialchars($_POST['pseudo']);
    $message2=  htmlentities($_POST['message']);
    //include_once('../Modele/connect.php');
    //Connexion avec la base de donnée et insertion dans
    include_once '../Modele/bddentre.php';
    //require insert();
    $req = $bdd->query("INSERT INTO chat(id,pseudo,message,date) VALUES ('','$pseudo2','$message2',NOW())");
    }
   
    
                if (isset($_POST['pseudo']) and isset($_POST['message']) and !empty($_POST['pseudo']) and !empty($_POST['message'])){
                    //require take();
                    $msg = $bdd->query("SELECT pseudo,message,DAY(date) AS jour, MONTH(date) AS mois, YEAR(date) AS annee, HOUR(date) AS heure, MINUTE(date) AS minute, SECOND(date) AS seconde FROM chat ORDER BY id ASC");
                    $i=0;
            while ($allmsg = $msg -> fetch()){
               $i=$i+1;     
            ?> 
            <div style="margin-left: 20px;min-width: 100px;"><b><p>[<?php echo $allmsg['jour']?>/<?php echo $allmsg['mois']?>/<?php echo $allmsg['annee']?> à <?php echo $allmsg['heure'] ?>h<?php echo $allmsg['minute']?>] <?php echo $allmsg['pseudo'] ?></b> : <?php echo $allmsg['message'];?></p></div>
            
            <?php  
            if ($i>501){
                $delete = $bdd->query('DELETE FROM chat');
            }
                }}
?>