<?php
session_start();
require '../class/Database.php';
require '../class/Client.php';
include '../class/Db.php';
require '../class/Reservations.php';


if (!isset($_SESSION['autorise']) || $_SESSION['autorise'] !== true){
    header('location: admin.php');
    exit;
    }
$dataBaseClient = new Database();
$utilisateurs = $dataBaseClient->getAllUtilisateurs();
$dataBaseReservation = new Db();
$reservations = $dataBaseReservation->readFromCsv();
?>


<table class="tableau-utilisateurs">
  <caption><h1>Liste des utilisateurs</h1></caption>
  <thead>
    <tr>
      <th>ID</th>
      <th>Nom</th>
      <th>Prénom</th>
      <th>Mail</th>
      <th>Telephone</th>
      <th>Adresse postale</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($utilisateurs as $utilisateur) {
      
      var_dump($utilisateur);?>
      <tr>
        <td><?php echo $utilisateur->getID(); ?></td>
        <td><?php echo $utilisateur->getNom(); ?></td>
        <td><?php echo $utilisateur->getPrenom(); ?></td>
        <td><?php echo $utilisateur->getEmail(); ?></td>
        <td><?php echo $utilisateur->getTelephone(); ?></td>
        <td><?php echo $utilisateur->getAdresse(); ?></td>
        <td><button onclick="location.href='src/suppression?suppression=<?= $utilisateur->getId() ?>'">🗑️ Supprimer</button></td>
      </tr>
    <?php }  
    ?>
<table class="tableau-utilisateurs">
  <caption><h1>Liste des utilisateurs</h1></caption>
  <thead>
    <tr>
      <th>Nombre de reservations</th>
      <th>Tarif</th>
      <th>Jours choisis</th>
      <th>Mail</th>
      <th>Telephone</th>
      <th>Adresse postale</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($reservations as $reservation) {
      
      var_dump($reservation);?>
      <tr>
        <td><?php echo $reservation[0]; ?></td>
        <td><?php echo $reservation[1]; ?></td>
        <td><?php echo $reservation[2]; ?></td>
        <td><?php echo $utilisateur->getEmail(); ?></td>
        <td><?php echo $utilisateur->getTelephone(); ?></td>
        <td><?php echo $utilisateur->getAdresse(); ?></td>
        <td><button onclick="location.href='src/suppression?suppression=<?= $utilisateur->getId() ?>'">🗑️ Supprimer</button></td>
      </tr>
    <?php }  
    ?>

  </tbody>
</table>

