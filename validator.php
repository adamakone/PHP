<?php
private $errors=[];
public function isEmail($email,$key,$sms="votre nom d'utilisateur doit contenir entre 6 et 30 caractères"){
if(is_Email($caractères)){
    $this->$errors[$key]=$sms;
}
public function isVide($email,$key,$sms="le champ email est obligatoire"){
    if(empty($caractères)){
        $this->$errors[$key]=$sms;
    }
}

public function isTelephone($email,$key,$sms="votre champ doit contenir que des chiffres"){
    if(is_Telephone($nbre)){
        $this->$errors[$key]=$sms;
    }
    public function isVide($email,$key,$sms="le champ telephone est obligatoire"){
        if(empty($nbre)){
            $this->$errors[$key]=$sms;
        }
    }
    

?>