<?php

error_reporting(E_ERROR | E_PARSE);

require_once('../model/User.php');

function auth(){
    if(isset($_POST['btn-login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        //we verify user auth...
        userAuth($username, $password);
    }
}

require_once('../../templates/login.php');