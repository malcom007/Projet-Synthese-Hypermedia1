<?php

class InputValidation{

    public static function emailValidation($email){
        if (empty($email)){
            throw new Exception('Vous devez entrer une adresse email valide');
        }
        else{
            //retrait des espace
            $verifyMail=trim(htmlspecialchars($email));
            //verification format mail et nous retourne un boolean
            $verifyMail = filter_var($verifyMail,FILTER_VALIDATE_EMAIL);

            if ($verifyMail==false){
                throw new Exception("Veuillez saisir une adresse email valide");
            }

        }

    }

    public static function phoneValidation($phoneNumber){

        //Format de numéro accepté
        $formats = [
            '### ### ####','##########'
        ];

        //Verification de format num tel saisi si correspond a ceux dans le tableau formats
        if (!in_array(trim(preg_replace('/[0-9]/', '#', htmlspecialchars($phoneNumber))), $formats)){

            throw new Exception("Format de telephone invalide, format accepté: ### ### ####");
        }
        else
            return $phoneNumber=trim(preg_replace('/\s/', '',htmlspecialchars($phoneNumber) ));
    }

    public static function passwordValidation(){
        
    }

}
