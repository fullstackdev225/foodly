<?php 

function dbConnect(){
    try{
        $database = new PDO('mysql:host=localhost;dbname=foodly;charset=utf8', 'root', 'root');
    }
    catch(Exception $e){
        die('Erreur de connexion '.$e->getMessage());
    }

    return $database;
}