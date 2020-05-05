<?php
class Fonction{
    private $Fonction1;
    private $Fonction2;

    public function __construct(){
    
    }

public function getFonction1(){
    return $this->Fonction1;
}

public function getFonction2(){
    return $this->Fonction2;
}
public function setFonction1($Fonction1){
    $this->Fonction1=$Fonction1;
}

public function setFonction2($Fonction2){
    $this->Fonction2=$Fonction2;
}



}
?>