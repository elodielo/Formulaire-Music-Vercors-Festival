<?php 

require './class/Client.php';
require './class/Reservations.php';
 require './class/dataBase.php';

var_dump($_POST);

if (isset($_POST['nombrePlaces'])
&&  isset($_POST['nom']) 
&& isset($_POST['prenom']) 
&& isset($_POST['email']) 
&& isset($_POST['telephone']) 
&& isset($_POST['adressePostale'])){
  var_dump('hello');
    $prenom = htmlspecialchars($_POST['prenom']);
    $nom = htmlspecialchars($_POST['nom']);
    $nbrReservation = (int)$_POST['nombrePlaces'];
    // $nombrePlaces = (int)$nombrePlacesEcrites;
    $telephone = $_POST['telephone'];
    $adresse = $_POST['adressePostale'];
    $tarif= 0;
    $nbrTentes=0;
    $nbrCamions= 0;
    $nbrCasques = (int)$_POST['nombreCasquesEnfants'];
    $nbrLuges = $_POST['NombreLugesEte'];
    $joursChoisis ="";
    $nbrEnfants= "non";

    // if (filter_var($_POST['telephone'], FILTER_VALIDATE_INT)) {
    //   $email = htmlspecialchars($_POST['telephone']);
    // }else {
    //   header('location:../index.php?erreur=');
    // }

    if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $email = htmlspecialchars($_POST['email']);
      }else {
        header('location:../index.php?erreur=');
      }


    
    if(isset($_POST['pass1jour'])){
      $tarif = 40;
    } elseif (isset($_POST['pass2jours'])) {
      $tarif = 70;
    }elseif (isset($_POST['pass3jours'])) {
      $tarif = 100;
    }
    if(isset($_POST['pass1jourreduit'])){
      $tarif = 25;
    } elseif (isset($_POST['pass2joursreduit'])) {
      $tarif = 50;
    }elseif (isset($_POST['pass3joursreduit'])) {
      $tarif = 65;
    }

    if(isset($_POST['choixJour1'])){
      $joursChoisis = "01/07";
    }elseif (isset($_POST['choixJour2'])){
      $joursChoisis = "02/07";
    }elseif (isset($_POST['choixJour3'])){
      $joursChoisis = "03/07";
    }elseif (isset($_POST['choixJour12'])){
      $joursChoisis = "du 01/07 au 02/07";
    }elseif (isset($_POST['choixJour23'])){
      $joursChoisis = "du 02/07 au 03/07";
    }

    if(isset($_POST['tenteNuit1'])){
      $nbrTentes += 5;
    } elseif (isset($_POST['tenteNuit2'])) {
      $nbrTentes += 5;
    }elseif (isset($_POST['tenteNuit3'])) {
      $nbrTentes += 5;
    }elseif (isset($_POST['tente3Nuits'])) {
      $nbrTentes += 12;
    }

    if(isset($_POST['vanNuit1'])){
      $nbrCamions = +5;
    } elseif (isset($_POST['vanNuit2'])) {
      $nbrCamions += 5;
    }elseif (isset($_POST['vanNuit3'])) {
      $nbrCamions += 5;
    }elseif (isset($_POST['van3Nuits'])) {
      $nbrCamions += 12;
    }

    if(isset($_POST['enfantsOui'])){
      $nbrEnfants = "oui";
    }elseif (isset($_POST['enfantsNon'])) {
      $nbrEnfants = "non";
    }

    $reservation = new Reservation($nbrReservation, $tarif, $joursChoisis,$nbrTentes, $nbrCamions, $nbrEnfants, $nbrCasques, $nbrLuges);
     $client = new Client($nom, $prenom, $email, $telephone, $adresse); 
    $reservation->calculPrixFestival();
    var_dump($tarif);
    // var_dump($client);
    var_dump($reservation);
             $SaveClient = $Database->enregistrerClient($client);
      // var_dump($client);
  }