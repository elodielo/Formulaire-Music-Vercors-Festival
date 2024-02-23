<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $password = $_POST['password'];



    if ($password === "1234"){
        $_SESSION['autorise'] = true;
        header('location: AdminLogin.php'); 

        exit();
    } else {
        echo 'Mot de passe incorrect. Veuillez réessayer.';
    }

}

?>