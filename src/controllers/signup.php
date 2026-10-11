<?php

error_reporting(E_ERROR | E_PARSE);

require_once('../model/User.php');

function signup(){
   if(isset($_POST['btn-signup'])){
        $lastName = $_POST['lastname'];
        $firstName = $_POST['firstname'];
        $emailAdress = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirmPassword'];

        //we verify email validation...
        if(filter_var($emailAdress, FILTER_VALIDATE_EMAIL)){
            //we verify if email exists...
            if(ifEmailExists($emailAdress)){
                 echo '<div class="alert alert-danger alert-dismissible fs-4">
                            Cet adresse email existe déja
                            <i class="fa-solid fa-circle-xmark text-danger"></i>
                            <button class="btn-close" data-bs-dismiss="alert"></button>
                        </div>';
            }
             else{
                //we verify if username exists...
                if(ifUsernameExists($username)){
                     echo '<div class="alert alert-danger alert-dismissible fs-4">
                                Ce nom d\'utilisateur existe déja
                                <i class="fa-solid fa-circle-xmark text-danger"></i>
                                <button class="btn-close" data-bs-dismiss="alert"></button>
                            </div>';
                }
                 else{
                    //we verify if passwords are correct...
                    if($password === $confirmPassword){
                        //we hash user password
                        $passwordHash = password_hash($password, PASSWORD_DEFAULT);

                        //we save user informations in the database...
                        userSave($lastName, $firstName, $emailAdress, $username, $passwordHash);
                    }
                     else{
                         echo '<div class="alert alert-danger alert-dismissible fs-4">
                                    Mots de passe non conformes
                                    <i class="fa-solid fa-circle-xmark text-danger"></i>
                                    <button class="btn-close" data-bs-dismiss="alert"></button>
                                </div>';
                     }
                 }
             }
        }
         else{
            echo '<div class="alert alert-danger alert-dismissible fs-4">
                        Email invalid
                        <i class="fa-solid fa-circle-xmark text-danger"></i>
                        <button class="btn-close" data-bs-dismiss="alert"></button>
                 </div>';
         }
   }

}

require_once('../../templates/signup.php');