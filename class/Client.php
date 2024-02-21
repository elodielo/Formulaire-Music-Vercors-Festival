<?php 
class Client{
    private $id;
    private $nom;
    private $prenom;
    private $email;
    private $telephone;
    private $adresse;

    function __construct($nom, $prenom, $email, $telephone, $adresse)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->telephone = $telephone;
        $this->adresse = $adresse;
        $this->id = $this->idAleatoire();
    }

    private function idAleatoire(){
        $min = 0;
        $max = 10000000;
        return rand($min,$max);
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
    
    function ValeursClientsDansTableau(){
        return [
            $this->getNom(),
            $this->getPrenom(),
            $this->getEmail(),
            $this->getTelephone(),
            $this->getAdresse(),
        ];
    }

}