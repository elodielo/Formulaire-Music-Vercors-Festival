<?php 

class Reservation{
    private $nbrReservation;
    private $tarif; // reduit ou pas 
    // private $nbrJours;
    private $joursChoisis;
    private $nbrTentes;
    private $nbrCamions;
    private $nbrEnfants;
    private $nbrCasques;
    private $nbrLuges;
    
    function __construct($nbrReservation, $tarif ,$joursChoisis, $nbrTentes, $nbrCamions, $nbrEnfants, $nbrCasques, $nbrLuges){
        $this->nbrReservation = $nbrReservation;
        $this->tarif = $tarif;
        // $nbrJours = $this->nbrJours;
        $this->joursChoisis = $joursChoisis;
        $this->nbrTentes = $nbrTentes;
        $this->nbrCamions = $nbrCamions;
        $this->nbrEnfants = $nbrEnfants;
        $this->nbrCasques = $nbrCasques;
        $this->nbrLuges = $nbrCasques;
    }
    
    function getNbrReservation(){
        return $this->nbrReservation;
    }    
    function setNbrReservation($nbrReservation){
        $this->nbrReservation = $nbrReservation;
    }
    function getTarif(){
        return $this->tarif;
    }    
    function setTarif($tarif){
        $this->tarif = $tarif;
    }
    // function getnbrJours(){
    //     return $this->nbrJours;
    // }    
    // function setnbrJours($nbrJours){
    //     $this->nbrJours = $nbrJours;
    // }
    function getjoursChoisis(){
        return $this->joursChoisis;
    }    
    function setjoursChoisis($joursChoisis){
        $this->joursChoisis = $joursChoisis;
    }
    function getnbrTentes(){
        return $this->nbrTentes;
    }    
    function setnbrTentes($nbrTentes){
        $this->nbrTentes = $nbrTentes;
    }
    function getnbrCamions(){
        return $this->nbrCamions;
    }    
    function setnbrCamions($nbrCamions){
        $this->nbrCamions = $nbrCamions;
    }
    function getnbrEnfants(){
        return $this->nbrEnfants;
    }    
    function setnbrEnfants($nbrEnfants){
        $this->nbrEnfants = $nbrEnfants;
    }
    function getnbrCasques(){
        return $this->nbrCasques;
    }    
    function setnbrCasques($nbrCasques){
        $this->nbrCasques = $nbrCasques;
    }
    function getnbrLuges(){
        return $this->nbrLuges;
    }    
    function setnbrLuges($nbrLuges){
        $this->nbrLuges = $nbrLuges;
    }

    function calculPrixFestival(){
        $PrixTotal = ($this->nbrReservation*$this->tarif + $this->nbrTentes+ $this->nbrCamions+ $this->nbrCasques);
        echo($PrixTotal);
    }
    
    function ValeursReservationsDansTableau(){
        return [
           "nbrResa" => $this->getNbrReservation(),
           "tarif" => $this->getTarif(),
           "joursChoisis" => $this->getjoursChoisis(),
           "nbrTentes" => $this->getnbrTentes(),
            "nbrCamions" => $this->getnbrCamions(),
            "nbrEnfants" => $this->getnbrEnfants(),
            "nbrCasques" => $this->getnbrCasques(),
            "nbrLuges" => $this->getnbrLuges(),
        ];
    }
    
}