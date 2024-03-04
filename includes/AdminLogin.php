<?php
session_start();
require '../class/Database.php';
require '../class/Client.php';
include '../class/Db.php';
require '../class/Reservations.php';

include '../includes/header.php';


if (!isset($_SESSION['autorise']) || $_SESSION['autorise'] !== true){
    header('location: admin.php');
    exit;
    }
$dataBaseClient = new Database();
$utilisateurs = $dataBaseClient->getAllUtilisateurs();
$dataBaseReservation = new Db();
$reservations = $dataBaseReservation->readFromCsv();
?>



  <tbody>
    <?php foreach ($utilisateurs as $utilisateur) {
       }  
    ?>
<table class="tableau-utilisateurs">
  <caption><h2>Liste des utilisateurs</h2></caption>
  <thead>
    <tr>
    <th>ID</th>
      <th>Nom</th>
      <th>Prénom</th>
      <th>Mail</th>
      <th>Telephone</th>
      <th>Adresse postale</th>
      <th>Nombre de reservations</th>
      <th>Tarif</th>
      <th>Jours choisis</th>
      <th>Prix pour les tentes</th>
      <th>Prix pour les vans</th>
      <th>Enfants</th>
      <th>Prix pour les casques</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($reservations as $reservation) {
      
      ?>
      <tr>
       <td><?php echo $utilisateur->getID(); ?></td>
        <td><?php echo $utilisateur->getNom(); ?></td>
        <td><?php echo $utilisateur->getPrenom(); ?></td>
        <td><?php echo $utilisateur->getEmail(); ?></td>
        <td><?php echo $utilisateur->getTelephone(); ?></td>
        <td><?php echo $utilisateur->getAdresse(); ?></td>
        <td><?php echo $reservation[0]; ?></td>
        <td><?php echo $reservation[1]; ?></td>
        <td><?php echo $reservation[2]; ?></td>
        <td><?php echo $reservation[3]; ?></td>
        <td><?php echo $reservation[4]; ?></td>
        <td><?php echo $reservation[5]; ?></td>
        <td><?php echo $reservation[6]; ?></td>
      </tr>
    <?php }  
    ?>

  </tbody>
</table>

