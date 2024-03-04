<?php
session_start();
include './includes/header.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $password = $_POST['password'];



    if ($password === "1234"){
        $_SESSION['autorise'] = true;
        header('location: ./includes/AdminLogin.php'); 

        exit();
    } else {
        echo 'Mot de passe incorrect. Veuillez réessayer.';
    }

}

?>

<form action= '<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>' method="post" >
    <h2>Panel administrateur </h2>
  
   
    <label for="password">Mot de passe :</label>
    <input type="password" name="password" id="password" required>
    <div id="message"></div>
   
     
   
    <input type="submit" value="Se connecter">
  </form>
