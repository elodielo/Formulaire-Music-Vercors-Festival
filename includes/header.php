<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/styleHeader.css">
  <link rel="stylesheet" href="style.css">
  <script defer src="script.js" type="module"></script>
  <!-- <script defer src="scriptVerificationChamps.js" type="module"></script> -->
  <title>Formulaire de réservation Music Vercos Festival</title>
</head>
<header>
    <div id="enTete" class="flexLigne" > 
      <img id="logo" src="../Images/logo.png" alt="logo montagne"> 
      <h1> Music Vercors Festival </h1>
    </div>
    <div>
      <?php if (isset($_SESSION['connecté'])) { ?>
        <a href="./includes/deconnexion.php">Déconnexion</a>
      <?php } else { ?>
        <a href="admin.php">Admin</a>
        <a href="connexion.php">Connexion</a>
      <?php } ?>
    </div>
  </header>

<body>