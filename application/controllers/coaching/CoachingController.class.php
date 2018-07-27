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

            $coaching = [];

            if ( empty($formFields["lastname"]) ) {

                throw new Exception("Lastname empty");
                
            } else {

                $coaching["lastname"] = strip_tags($formFields["lastname"]);

            }

            if ( empty($formFields["firstname"]) ) {

                throw new Exception("Firstname empty");
                
            } else {

                $coaching["firstname"] = strip_tags($formFields["firstname"]);

            }

            if ( empty($formFields["age"]) ) {

                throw new Exception("age empty");
                
            } else {

                $coaching["age"] = $formFields["age"];

            }            


            if ( empty($formFields["email"]) ) {

                throw new Exception("Email empty");
                
            } else {

                $coaching["email"] = strip_tags($formFields["email"]);

            }

            if ( $formFields["gender"] == "Sexe..." ) {

                throw new Exception("Gender empty");
                
            } else {

                $coaching["gender"] = strip_tags($formFields["gender"]);

            }

            if ( empty($formFields["weight"]) ) {

                throw new Exception("Weight empty");

            } else {

                $coaching["weight"] = strip_tags($formFields["weight"]);

            }
            if ( empty($formFields["height"]) ) {

                throw new Exception("Height empty");

            } else {

                $coaching["height"] = strip_tags($formFields["height"]);

            }
            if ( $formFields["nb_training"] == "Nombre de séances par semaine" ) {

                throw new Exception("nb training empty");

            } else {

                $coaching["nb_training"] = strip_tags($formFields["nb_training"]);

            }
            if ( $formFields["nb_year"] == "Nombre d'années de sport" ) {

                throw new Exception("nb year empty");

            } else {

                $coaching["nb_year"] = strip_tags($formFields["nb_year"]);

            }
            if ( empty($formFields["other"]) ) {

                throw new Exception("other empty");

            } else {

                $coaching["other"] = strip_tags($formFields["other"]);

            }
            if ( empty($formFields["goal"]) ) {

                throw new Exception("Goal empty");

            } else {

                $coaching["goal"] = strip_tags($formFields["goal"]);

            }            

            $coachingModel = new CoachingModel();

            $coachingModel->saveCoaching($coaching);

        }
    }
}