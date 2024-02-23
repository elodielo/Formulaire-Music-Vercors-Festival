<?php 
class Client{
    private $_id;
    private $nom;
    private $prenom;
    private $email;
    private $telephone;
    private $adresse;

    function __construct($nom, $prenom, $email, $telephone, $adresse, $id = null)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->telephone = $telephone;
        $this->adresse = $adresse;
        if ($id === null) {
            $this ->_id = $this -> gererUniqueId();
        } else { 
            $this ->_id = $id;
        }
    }

    private function gererUniqueId() {
        return uniqid();
    }
    function getNom(){
        return $this->nom;
    }

    function setNom($nom){
        $this->nom = $nom;
    } 

    function getPrenom(){
        return $this->prenom;
    }

    function setPrenom($prenom){
        $this->prenom = $prenom;
    } 

    function getEmail(){
        return $this->email;
    }

    function setEmail($email){
        $this->email = $email;
    } 

    function getTelephone(){
        return $this->telephone;
    }

    function setTelephone($telephone){
        $this->telephone = $telephone;
    } 

    function getAdresse(){
        return $this->adresse;
    }

    function setAdresse($adresse){
        $this->adresse = $adresse;
    } 

    public function getId(){
        return $this->_id;
      }
    
      public function setId(int|string $id){
        if (is_string($id) && $id === "à créer") {
          $this->_id = $this->CreerNouvelId();
        }else {
          $this->_id = $id;
        }}

        private function CreerNouvelId(){
            $Database = new Database();
            $utilisateurs = $Database->getAllUtilisateurs();
        
            $IDs = [];
        
            foreach($utilisateurs as $utilisateur){
              $IDs[] = $utilisateur->getId();
            }
        
            $i = 1;
            $unique = false;
            while ($unique === false) {
              if (in_array($i, $IDs)) {
                $i ++;
              } else {
                $unique = true;
              }
            }
            return $i;
          }

    
    function ValeursClientsDansTableau(){
        return [
           "id" => $this->getId(),
           "nom" => $this->getNom(),
           "prenom" => $this->getPrenom(),
           "email" => $this->getEmail(),
            "telephone" => $this->getTelephone(),
            "adressePostale" => $this->getAdresse(),
        ];
    }

}