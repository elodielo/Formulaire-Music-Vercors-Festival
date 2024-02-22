<?php 
class Client{
    private $id;
    private $nom;
    private $prenom;
    private $email;
    private $telephone;
    private $adresse;

    function __construct($nom, $prenom, $email, $telephone, $adresse, $id = "à créer")
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->telephone = $telephone;
        $this->adresse = $adresse;
        $this->setId($id);
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

    function getId(){
        return $this->id;
    }

    public function setId(int|string $id){
        if (is_string($id) && $id === "à créer") {
          $this->id = $this->CreerNouvelId();
        }else {
          $this->id = $id;
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
            $this->getId(),
            $this->getNom(),
            $this->getPrenom(),
            $this->getEmail(),
            $this->getTelephone(),
            $this->getAdresse(),
        ];
    }

}