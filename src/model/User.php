<?php

require_once('../model/databaseConnection.php');

function ifEmailExists(string $email){
    //we connect to database...
    $database = dbConnect();

    //we getting email in the database...
    $request = $database->prepare('SELECT email FROM users WHERE email = ?');
    $request->execute([$email]);
    $result = $request->fetch();

    //we compare email...
    if($result){
        return true;
    }
     else{
        return false;
     }
}


function ifUsernameExists(string $username){
    //we connect to database...
    $database = dbConnect();

    //we getting username...
    $request = $database->prepare('SELECT username FROM users WHERE username = ?');
    $request->execute([$username]);
    $result = $request->fetch();

    //we compare username...
    if($result){
        return true;
    }
     else{
        return false;
     }
}


function userSave(string $lastName, string $firstName, string $email, string $username, string $password){
    //we connect to database...
    $database = dbConnect();

    //we save user informations...
    $request = $database->prepare('INSERT INTO users(last_name, first_name, email, username, pass) VALUES(?, ?, ?, ?, ?)');
    $request->execute([$lastName, $firstName, $email, $username, $password]);

    //we redirect to the login page...
    header('Location: login.php');
}