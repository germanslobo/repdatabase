<?php

    include 'conexionBD.php';
    CrearUsuarios("Salvador Sanchez","1997/11/25","salva@domi.com","1234");
    CrearUsuarios("Vannessa Sanchez","1993/09/17","vanne@domi.com","1234");
    CrearUsuarios("German Sanchez","1960/11/25","german@domi.com","1234");

    function CrearUsuarios($Nombre,$FechaNacimiento,$UserName,$Password){
    IniciarConexion();
    $Consulta="Select * from usuario where Username='".$UserName."'";
    $Resultado= mysqli_num_rows($GLOBALS['Conexion']->query($Consulta));
    if($Resultado==0){
        $Consulta = "INSERT INTO usuario (Nombre, FechaNacimiento, Username, Password)
        VALUES ('".$Nombre."', '".$FechaNacimiento."', '".$UserName."', '".password_hash($Password, PASSWORD_BCRYPT)."')";

        if ($GLOBALS['Conexion']->query($Consulta) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $GLOBALS['Conexion']->error;
        }
    }
    DesactivarConexion();
    }
 ?>
