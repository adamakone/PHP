<?php
class Sexe{
    private $masculin;
    private $feminin;

    public __construct(){
    
}

public function getmasculin(){
    return $this->masculin;
}

public function getfeminin(){
    return $this->feminin;
}
public function setmasculin($masculin){
    $this->masculin=$masculin;
}

public function setfeminin($feminin){
    $this->feminin=$feminin;
}



}
?>