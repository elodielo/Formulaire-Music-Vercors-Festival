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
        $this->id = this->idAleatoire();
    }

    private function idAleatoire(){
        return Math.floor(Math.random() * 100000000)
    }

}