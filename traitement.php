<?php 

require './class/Client.php';
// require './class/dataBase.php';

var_dump($_POST);

if (isset($_POST['nom']) && isset($_POST['prenom']) 
&& isset($_POST['email']) && isset($_POST['telephone']) 
&& isset($_POST['email'])){
    $prenom = htmlspecialchars($_POST['prenom']);
    $nom = htmlspecialchars($_POST['nom']);

    if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $mail = htmlspecialchars($_POST['email']);
      }else {
        header('location:../index.php?erreur=');
      }
     
     $client = new Client($nom, $prenom, $email, $telephone, $adresse); 
     $SaveClient = $dataBase->enregistrerClient($client);
    }
