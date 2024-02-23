<?php
session_start();

if (!isset($_SESSION['autorise']) || $_SESSION['autorise'] !== true){
    header('location: admin.php');
    exit;
    }

$utilisateurs = array_map('str_getcsv', file('csv/client.csv'));
?>


<table class="tableau-utilisateurs">
  <caption><h1>Liste des utilisateurs</h1></caption>
  <thead>
    <tr>
      <th>ID</th>
      <th>Nom</th>
      <th>Prénom</th>
      <th>Mail</th>
      <th>Rôle</th>
      <th>Outils</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($utilisateurs as $utilisateur) { ?>
      <tr>
        <td><?php echo $utilisateur[0]; ?></td>
        <td><?php echo $utilisateur[1]; ?></td>
        <td><?php echo $utilisateur[2]; ?></td>
        <td><?php echo $utilisateur[3]; ?></td>
        <td><?php echo $utilisateur[4]; ?></td>
        <td><button onclick="location.href='src/suppression?suppression=<?= $utilisateur->getId() ?>'">🗑️ Supprimer</button></td>
      </tr>
    <?php } ?>
  </tbody>
</table>

