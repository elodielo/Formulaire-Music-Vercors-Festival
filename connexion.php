<?php
session_start();

if (isset($_SESSION['connecté']) && !empty($_SESSION['user'])) {
  // abort
  //header('location:tableau-de-bord.php');
  die;
}

$succes = null;
$echec = null;
if (isset($_GET['succes']) && $_GET['succes'] === "inscription") {
  $succes = true;
}
if (isset($_GET['erreur'])) {
  $echec = true;
}

include "includes/header.php";
?>
  <form action="src/authentication.php" method="post" onsubmit=" return ValidationConnexion()">
    <h2>Connexion</h2>
    <?php if ($succes) { ?>
      <div class="message succes">
        Votre réservation est validée !
      </div>
    <?php } ?>
    <label for="mail">Mail :</label>
    <input type="email" name="mail" id="mail" required>
    <label for="nom">Nom :</label>
    <input type="text" name="nom" id="nom" required>
    <div id="message"></div>
    <?php if ($echec) { ?>
      <div class="message echec">
        Nom ou email invalide.
      </div>
    <?php } ?>
    <input type="submit" value="Se trouver">
  </form>
  </html>
