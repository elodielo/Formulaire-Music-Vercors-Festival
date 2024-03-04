<?php
session_start();
require 'classes/Database.php';
require 'classes/Client.php';
$Database = new Database();

// Formulaire de connexion soumis :
if (isset($_POST['email']) && isset($_POST['nom']) && !empty($_POST['email']) && !empty($_POST['nom'])) {

  $userAvecCeMail = $Database->getThisUtilisateurByMail($_POST['email']);
  if ($userAvecCeMail) {

      $_SESSION['connecté'] = TRUE;
      $_SESSION['user'] = serialize($userAvecCeMail);
      header('location: ./recapResa.php');
      die;
    
  }

}

// Si on arrive là c'est que quelque chose s'est mal passé.
// Afin d'éviter de donner des indications sur la nature de l'échec à l'utilisateur,
// on lui renvoie une erreur générale.
header('location: ../connexion.php?erreur');
die;
