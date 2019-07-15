<?php

    $host = "localhost";
    $user = 'user-agenda';
    $password = '1234';
    $Base = 'agenda';
    $Conexion;
    function IniciarConexion(){
       try{
       $GLOBALS['Conexion']=mysqli_connect($GLOBALS['host'],$GLOBALS['user'],$GLOBALS['password'],$GLOBALS['Base']);
       }catch(PDOException $e){
       }

    }

    function  DesactivarConexion(){
        $GLOBALS['Conexion']->close();
    }
?>
