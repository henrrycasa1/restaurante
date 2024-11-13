<?php
    function conectarDB(){
        $db=mysqli_connect('localhost','root','','restaurante');
        if($db){
            //echo "se conecto";
        }
        else{
            echo "No se conecto";
            
        }
        return $db;
    }
    //conectarDB();
?>
