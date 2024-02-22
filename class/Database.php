<?php
final class Database{
  private $_DB;

  public function __construct(){
    $this->_DB = __DIR__ . "./csv/client.csv";
  }

  public function getAllUtilisateurs(): array {
    $connexion = fopen($this->_DB, 'r');
    $utiliseurs = [];

    while (($user = fgetcsv($connexion, 1000, ",")) !== FALSE) {
      $utiliseurs[] = new client($user[1],$user[2],$user[3],$user[4],$user[0],$user[5]);
    }

    fclose($connexion);

    return $utiliseurs;
  }

  public function getThisUtilisateurById(int $id) : client|bool {
    $connexion = fopen($this->_DB, 'r');
    while (($user = fgetcsv($connexion, 1000, ",")) !== FALSE) {
      if ((int) $user[0] === $id) {
        $user = new client($user[1],$user[2],$user[3],$user[4],$user[0],$user[5]);
        break;
      }else {
        $user = false;
      }
    }
    return $user;
  }

  public function getThisUtilisateurByMail(string $mail) : client|bool {
    $connexion = fopen($this->_DB, 'r');
    while (($user = fgetcsv($connexion, 1000, ",")) !== FALSE) {
      if ($user[3] === $mail) {
        $user = new client($user[1],$user[2],$user[3],$user[4],$user[0],$user[5]);
        break;
      }else {
        $user = false;
      }
    }
    return $user;
  }

  public function enregistrerClient(client $user) : bool {
    $connexion = fopen($this->_DB, 'ab');

    $retour = fputcsv($connexion, $user->ValeursClientsDansTableau());

    fclose($connexion);

    return $retour;
  }

 
}


    