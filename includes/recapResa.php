<?php 
session_start();
include './header.php';
require '../class/Client.php';
require '../class/Reservations.php';
?>

<div id="recapResaDiv">
    <h2> Votre Réservation </h2>
    <p> Bonjour <?php echo $_GET['nom'] ?></p>
    <p>La reservation a bien été effectuée !</p>
    <p>Voici le récapitulatif : </p>
    <ul>
        <li> Nombre de personnes : <?php echo $_GET['nbrReservation'] ?> </li>
        <li> Jours choisis : <?php echo $_GET['joursChoisis']?></li>
        <li> Prix pour les tentes : <?php echo $_GET['nbrTentes'] ?> </li>
        <li> Prix pour les vans : <?php echo $_GET['nbrCamions'] ?></li>
        <li> Prix pour les casques : <?php echo $_GET['nbrCasques'] ?> </li>
        <li> Nombre de luges: <?php echo $_GET['nbrLuges'] ?> </li>
    </ul>
    <p> Le tout pour la somme de : <?php echo $_GET['prixTotal'] ?> euros !</p>
</div>