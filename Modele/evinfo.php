<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../Vue/tete.css">
        <meta charset="utf-8"/>
        <title> Création d'évenement </title>
    </head>
        <!--Mise en place du logo et connexion/inscription-->
        <header> 
    <?php include('../Vue/header.php'); ?>
    </header> 
        <body>
          
        <?php
            
        $test1 = $_POST['Névénement'];
        $test2 = $_POST['lieu'];
        $test3 = $_POST['date'];
        if (!empty($test1)) {
            if (!empty($test2)){
                if (!empty($test3)){
                    extract($_POST);
                    echo "vos données on bien été envoyés ! ";
                    try {
                        $DB_eve = new PDO ("mysql:host=localhost;dbname=sport'again;charset=utf8",'root','');
                        }
                        catch (exeption $e) {
                            die ('erreur : '. $e ->getMessage());
                        }
                        $reponse=$DB_eve->prepare('INSERT INTO planning (id_planning,lieu, titre, date) VALUES ("",:lieu,:titre,:date)');
                        $reponse->execute(array('titre' => $test1,'lieu' => $test2, 'date' => $test3));
                    }
                }
            }
            
        ?>
    </body>
    <footer>
        <?php include('../Vue/footer.php'); ?>
    </footer>
    
</html>

