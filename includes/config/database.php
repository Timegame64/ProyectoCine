<?php
    function conectarDB(){
        $db=mysqli_connect('localhost','root','','cine');
        if(!$db){
            echo "No se conecto";
            exit;
        }
        return $db;
    }
?>