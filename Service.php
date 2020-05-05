<?php
class Service{
    private $Service1;
    private $Service2;

    public function __construct(){
    
    }

public function getService1(){
    return $this->Service1;
}

public function getService2(){
    return $this->Service2;
}
public function setService1($Service1){
    $this->Service1=$Service1;
}

public function setService2($Service2){
    $this->Service2=$Service2;
}



}
?>