<?php
    $server = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'cine';

    try{
        $conn = new PDO("mysql:host=$server;dbname=$database;",$username, $password);
    }catch(PDOExeption $e){
        die('Connected failed: '.$e->getMessage());
    }

?>