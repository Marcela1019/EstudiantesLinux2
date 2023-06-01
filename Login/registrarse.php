<?php

//para imprimir errores en ejecucion;

ini_set("display_errors", 1);

ini_set("display_startup_errors", 1);

error_reporting(E_ALL);

if(isset($_POST['registrarse'])){

    require_once ("RegistroUser.php");
    
    $registrar = new RegistroUser();

    $registrar->setIdCamper(1);
    $registrar->setEmail($_POST['email']);
    $registrar->setUsername($_POST['username']);
    $registrar->setPassword($_POST['password']);

    /* $registrar->inserData();

     echo "<script>alert ('Los datos fueron guardados satisfactoriamente'); document.location='loginRegister.php' </script>";
  */

  if ($registrar->checkUser($_POST['email'])){
    echo "<script>alert ('Usuario ya se encuentra registrado'); document.location='loginRegister.php' </script>";
  }
else{
    $registrar->inserData();
    echo "<script>alert ('Los datos fueron guardados satisfactoriamente'); document.location='../Home/home.php' </script>";

}
}

?>