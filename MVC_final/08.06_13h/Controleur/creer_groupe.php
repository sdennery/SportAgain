<?php session_start(); ?> 

<html>
    <head>
        <link rel="stylesheet" href="Page_connexion.css">
        <meta charset="utf-8"/>
    </head>
        <!--Mise en place du logo et connexion/inscription-->
         <?php include("../Controleur/choix_header.php")?>        
         <body>
        <!--Information pour la connexion-->
        <div style="background-color: rgb(112, 169, 198);margin-top: -29px;border:solid 1.5px black;">
            <br> </br>
            <div style="border:solid 2.5px black; height: 300px; width:1000px;margin:auto;background-color: white;">
                <p style="font-size: 28px; margin-left:270px ;"> L'inscription a été prise en compte.</p>
            </div>
            <br>
            <br>
        <!--Bas de page-->
        <?php include'footer.php'?>
    </div>
    </body>
</html>

<?php
$Image=$_FILES['image'];
$gestion_erreur = array();
$statut=false;

try
{
    $bdd = new PDO("mysql:host=localhost;dbname=sport'again;charset=utf8", 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}



if(empty($_POST['type'])){
    $gestion_erreur["type"]="Veuillez renseigner le type de votre groupe!";
    
    $statut=true;
} 

if($_POST['nombre']==0){
    $gestion_erreur["nombre"]="Veuillez renseigner le nombre de personnes disponible dans votre groupe!";
    echo $gestion_erreur["nombre"];
    $statut=true;
}

if(empty($_POST['description'])){
   $gestion_erreur["description"]="Veuillez decrire brievement votre groupe!"; 
   $statut=true;
}

if (!empty($Image)){
    $name=$_FILES["image"]["name"];
    $type=$_FILES["image"]["type"];
    $size=$_FILES["image"]["size"];
    $temp=$_FILES["image"]["tmp_name"];
    $error=$_FILES["image"]["error"];
    if($error >0){
        die ("Error uploading file! Code $error. ");
    }
    else {
        move_uploaded_file($temp, "../Vue/Image/".$name);
        echo 'upload réussi';
    }
    extract($_POST);
        $req = $bdd->prepare('INSERT INTO groupe(nom, nombre_place, departement, niveau, descriptif, sport, etat,image) VALUES(:nom, :nombre_place, :departement, :niveau, :descriptif, :sport, :etat, :image)');
        $req->execute(array(
        'nom' => htmlspecialchars($_POST['groupe']),  
        'nombre_place' => htmlspecialchars($_POST['nombre']),
        'departement' => htmlspecialchars($_POST['Departement']),
        'niveau' => htmlspecialchars($_POST['Niveaux']),
        'descriptif' => htmlspecialchars($_POST['description']),
        'sport' => htmlspecialchars($_POST['Sport']),
        'etat' => htmlspecialchars($_POST['type']),
        'image' => htmlspecialchars($name)    
        ));
        
        $reponse2=$bdd->prepare("SELECT * FROM groupe WHERE nom=?");
        $reponse2->execute(array(htmlspecialchars($_POST['groupe'])));
        $take= $reponse2->fetch()['id_groupe'];
        
    
       $req2 = $bdd ->prepare("INSERT INTO utilisateur_groupe (id_groupe,id_utilisateur,name,Etat) VALUES ('".$take."','".$_SESSION['id']."',:name,'2')");
       $req2->execute(array(
        'name' => htmlspecialchars($_POST['groupe']),  
           ));
}