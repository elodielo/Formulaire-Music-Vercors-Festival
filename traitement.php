<?php 
session_start();
require './class/Client.php';
require './class/Reservations.php';
include './class/Db.php';
require './class/Database.php';

if (isset($_POST['nombrePlaces'])
&&  isset($_POST['nom']) 
&& isset($_POST['prenom']) 
&& isset($_POST['email']) 
&& isset($_POST['telephone']) 
&& isset($_POST['adressePostale'])){
    $prenom = htmlspecialchars($_POST['prenom']);
    $nom = htmlspecialchars($_POST['nom']);
    $nbrReservation = (int)$_POST['nombrePlaces'];
    $adresse = htmlspecialchars($_POST['adressePostale']);
    $tarif= 0;
    $nbrTentes=0;
    $nbrCamions= 0;
    $nbrCasques = (int)$_POST['nombreCasquesEnfants']*2;
    $nbrLuges = (int)$_POST['NombreLugesEte'];
    $joursChoisis ="";
    $nbrEnfants= "non";

    if (filter_var($_POST['telephone'], FILTER_SANITIZE_NUMBER_INT)) {
      $telephone = ($_POST['telephone']);
      }else {
      header('location:index.php?erreur=invalid_telephone');
    }

    if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $email = htmlspecialchars($_POST['email']);
      }else {
        header('location:index.php?erreur=invalid_email');
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
    }
    if (isset($_POST['tenteNuit2'])) {
      $nbrTentes += 5;
    }
    if (isset($_POST['tenteNuit3'])) {
      $nbrTentes += 5;
    }
    if (isset($_POST['tente3Nuits'])) {
      $nbrTentes += 12;
    }

    if(isset($_POST['vanNuit1'])){
      $nbrCamions = +5;
    } 
    if (isset($_POST['vanNuit2'])) {
      $nbrCamions += 5;
    }

    if (isset($_POST['vanNuit3'])) {
      $nbrCamions += 5;
    }
    
    if (isset($_POST['van3Nuits'])) {
      $nbrCamions += 12;
    }

    if(isset($_POST['enfantsOui'])){
      $nbrEnfants = "oui";
    }elseif (isset($_POST['enfantsNon'])) {
      $nbrEnfants = "non";
    }

$reservation = new Reservation($nbrReservation, $tarif, $joursChoisis,$nbrTentes, $nbrCamions, $nbrEnfants, $nbrCasques, $nbrLuges);
$client = new Client($nom, $prenom, $email, $telephone, $adresse); 
    
$prixTotal = $reservation->calculPrixFestival();
$dataBaseClient = new Database();
$dataBaseResa = new Db('./csv/reservation.csv');
$nomEncoded = urlencode($nom);
$prenomEncoded = urlencode($prenom);
$emailEncoded = urlencode($email);
$telephoneEncoded = urlencode($telephone);
$adresseEncoded = urlencode($adresse);
$nbrReservationEncoded = urlencode($nbrReservation);
$tarifEncoded = urlencode($tarif);
$joursChoisisEncoded = urlencode($joursChoisis);
$nbrTentesEncoded = urlencode($nbrTentes);
$nbrCamionsEncoded = urlencode($nbrCamions);
$nbrEnfantsEncoded = urlencode($nbrEnfants);
$nbrCasquesEncoded = urlencode($nbrCasques);
$nbrLugesEncoded = urlencode($nbrLuges);

$SaveClient = $dataBaseClient->enregistrerClient($client);
$csvResa = $dataBaseResa->openCsv();
$saveReservation = $dataBaseResa->writeIntoCsv($csvResa, $reservation->ValeursReservationsDansTableau());
$redirectURL = "recapResa.php?nom=$nomEncoded&prenom=$prenomEncoded&email=$emailEncoded&telephone=$telephoneEncoded&adresse=$adresseEncoded&nbrReservation=$nbrReservationEncoded&tarif=$tarifEncoded&joursChoisis=$joursChoisisEncoded&nbrTentes=$nbrTentesEncoded&nbrCamions=$nbrCamionsEncoded&nbrEnfants=$nbrEnfantsEncoded&nbrCasques=$nbrCasquesEncoded&nbrLuges=$nbrLugesEncoded&prixTotal=$prixTotal";
header("Location: $redirectURL");
  }