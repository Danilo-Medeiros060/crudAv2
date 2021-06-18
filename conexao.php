<?php

    $server = "localhost";
    $user = "root";
    $pass = "";
    $bd = "crudav2";
    
    if($conn = mysqli_connect($server, $user, $pass, $bd)) {
     //   echo "conectado";
    } else {
      echo "erro";
    }
    
    function mensagem($texto, $tipo){
        echo "<div class='alert alert-$tipo' role='alert'>
         $texto
        </div>";
    }