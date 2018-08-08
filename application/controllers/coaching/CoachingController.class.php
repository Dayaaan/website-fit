<?php

class CoachingController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {
        /*
         * Méthode appelée en cas de requête HTTP POST
         *
         * L'argument $http est un objet permettant de faire des redirections etc.
         * L'argument $formFields contient l'équivalent de $_POST en PHP natif.
         */
        
    }

    public function httpPostMethod(Http $http, array $formFields)
    {
    	if ( isset($_POST["submit"]) ) {

            $coachingForm = [];

            if ( empty($formFields["lastname"]) ) {

                throw new Exception("Lastname empty");
                
            } else {


                if ( Validate::verifName($formFields["lastname"]) ) {
                    
                    $coachingForm["lastname"] = strip_tags($formFields["lastname"]);

                } else {

                    return ["errorMessage" => "Nom Invalide"];  

                }

            }

            if ( empty($formFields["firstname"]) ) {

                throw new Exception("Firstname empty");
                
            } else {

                if ( Validate::verifName($formFields["firstname"]) ) {

                    $coachingForm["firstname"] = strip_tags($formFields["firstname"]);

                } else {

                    return ["errorMessage" => "Prénom Invalide"];  

                }

            }

            if ( empty($formFields["age"]) ) {

                throw new Exception("age empty");
                
            } else {

                if ( Validate::verifNumber($formFields["age"]) ) {
                    
                    $coachingForm["age"] = $formFields["age"];

                } else {

                    return ["errorMessage" => "Age invalide ( ex : 25 )"];

                }
            }            


            if ( empty($formFields["email"]) ) {

                throw new Exception("Email empty");
                
            } else {

                if ( Validate::verifEmail($formFields["email"]) ) {

                    $coachingForm["email"] = strip_tags($formFields["email"]);

                } else {

                    return ["errorMessage" => "Email Invalide"]; 

                }
            }

            if ( $formFields["gender"] == "" ) {

                throw new Exception("Gender empty");
                
            } else {
                
                if ($formFields["gender"] == "man" || $formFields["gender"] == "woman" ) {

                    $coachingForm["gender"] = strip_tags($formFields["gender"]);

                } else {

                    return ["errorMessage" => "Choix du sexe invalide"];

                }
            }

            if ( empty($formFields["weight"]) ) {

                throw new Exception("Weight empty");

            } else {

                if ( Validate::verifNumber($formFields["weight"]) ) {
                    
                    $coachingForm["weight"] = strip_tags($formFields["weight"]);

                } else {

                    return ["errorMessage" => "Poids invalide ( ex: 55 )"];

                } 
            }

            if ( empty($formFields["height"]) ) {

                throw new Exception("Height empty");

            } else {

                if ( Validate::verifNumber($formFields["height"]) ) {
                    
                    $coachingForm["height"] = strip_tags($formFields["height"]);

                } else {

                    return ["errorMessage" => "Taille invalide ( ex : 165 )"];

                } 

            }
            if ( $formFields["nb_training"] == "" ) {

                throw new Exception("nb training empty");

            } else {

                if ( Validate::verifNumber($formFields["nb_training"]) ) {
                    
                    $coachingForm["nb_training"] = strip_tags($formFields["nb_training"]);

                } else {

                    return ["errorMessage" => "Nombre de training invalide "];

                } 
            }
            
            if ( empty($formFields["other"]) ) {

                throw new Exception("other empty");

            } else {

                $coachingForm["other"] = strip_tags($formFields["other"]);

            }
            if ( empty($formFields["goal"]) ) {

                throw new Exception("Goal empty");

            } else {

                $coachingForm["goal"] = strip_tags($formFields["goal"]);

            }            

            $coachingModel = new CoachingModel();

            $coachingModel->saveCoaching($coachingForm);

            Tools::sendMail($coachingForm["email"]);

            return ["successMessage" => "Votre inscription a bien été enregistré"];

        }
    }
}