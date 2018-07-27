<?php

class AccountController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {

        $userSession = new UserSession();

        $userSession->isNotAdmin();

        $id = $queryFields["id"];

        $userModel = new UserModel();

        $userById = $userModel->getUserById($id);

        return ["userById" => $userById];
        
        
    }

    public function httpPostMethod(Http $http, array $formFields)
    {

      if ( isset($_POST["submit"]) ) {

        $user = [];

        $user["user_id"] = $formFields["user_id"];

        $userModel = new UserModel();

        $userById = $userModel->getUserById($user["user_id"]); 

        if ( empty($formFields["password"]) ) {

          throw new Exception("Password empty");
            
        } else {

          $user["password"] = Tools::cleanText($formFields["password"]);

        }

        if ( empty($formFields["password_confirm"]) ) {

          throw new Exception("Password Confirm empty");

        } else {

          $passwordConfirm = Tools::cleanText($formFields["password_confirm"]);

        }

        $newPassword = $user["password"];


        if ( $newPassword != $passwordConfirm ) {

          return ["errorMessage" => "Mot de passe différent", "userById" => $userById];

        } else {

          $user["password"] = password_hash($newPassword,PASSWORD_BCRYPT);

        }

        $userModel = new UserModel();

        $userModel->saveNewPassword($user);

        return ["successMessage" => "Votre mot de passe a été changé", "userById" => $userById];

      } 

      return ["userById" => $userById];
       

    }
}