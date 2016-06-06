<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
 function inscription_groupe(){
      $etat="administrateur";
      $req = $bdd->prepare('INSERT INTO groupe(nom, nombre_place, lieu, niveau, description, sport, etat) VALUES(:nom, :nombre_place, :lieu, :niveau, :description, :sport, :etat)');
$req->execute(array(
    'nom' => htmlspecialchars($_POST['nom']),
    'nombre_place' => htmlspecialchars($_POST['nombre']),
    'lieu' => htmlspecialchars($_POST['lieu']),
    'niveau' => htmlspecialchars($_POST['lieu']),
    'description' => htmlspecialchars($_POST['description']),
    'sport' => htmlspecialchars($_POST['sport']),
    'etat' => $etat
    ));

    echo "vous avez été bien inscrit!";
}
 
