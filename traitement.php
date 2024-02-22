<?php 

require './class/Client.php';
// require './class/dataBase.php';

var_dump($_POST);

if (isset($_POST['nombrePlaces'])
&&  isset($_POST['nom']) 
&& isset($_POST['prenom']) 
&& isset($_POST['email']) 
&& isset($_POST['telephone']) 
&& isset($_POST['email'])){
    $prenom = htmlspecialchars($_POST['prenom']);
    $nom = htmlspecialchars($_POST['nom']);
    $nombrePlacesEcrites = $_POST['nombrePlaces'];
    $nombrePlaces = (int)$nombrePlacesEcrites;
    $telephone = $_POST['telephone'];
    $adresse = $_POST['adresse'];

    if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $mail = htmlspecialchars($_POST['email']);
      }else {
        header('location:../index.php?erreur=');
      }

    if($_POST['tarifReduit']){
      $tarif = $_POST['tarifReduit'];
    }
      
      $client = new Client($nom, $prenom, $email, $telephone, $adresse); 
      
      // $SaveClient = $dataBase->enregistrerClient($client);
      var_dump($client);
    }