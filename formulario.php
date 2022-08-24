<?php

$error = '';

//VALIDANDO NOMBRE
if(empty($_POST["nombre"])){
    $error = 'Ingresa un nombre </br>';
}else{
    $nombre = $_POST["nombre"];
    $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
    $nombre = trim($nombre);
    if($nombre==''){
        $error .= 'Nombre está vacio</br>';
    }
}
    //VALIDANDO apellido
if(empty($_POST["apellido"])){
    $error .= 'Ingresa un apellido </br>';
}else{
    $apellido = $_POST["apellido"];
    $apellido = filter_var($apellido, FILTER_SANITIZE_STRING);
    $apellido = trim($apellido);
    if($apellido==''){
        $error .= 'apellido está vacio</br>';
    }

}

  //VALIDANDO DNI
  if(empty($_POST["DNI"])){
    $error .= 'Ingresa un DNI </br>';
}else{
    $DNI = $_POST["DNI"];
    $DNI = filter_var($DNI, FILTER_SANITIZE_STRING);
    $DNI = trim($DNI);
    if($DNI==''){
        $error .= 'DNI está vacio</br>';
    }
}

  //VALIDANDO NACIMIENTO
  if(empty($_POST["nacimiento"])){
    $error .= 'Ingresa un nacimiento </br>';
}else{
    $nacimiento = $_POST["nacimiento"];
    $nacimiento = filter_var($nacimiento, FILTER_SANITIZE_STRING);
    $nacimiento = trim($nacimiento);
    if($nacimiento==''){
        $error .= 'nacimiento está vacio</br>';
    }
}


//VALIDANDO E-MAIL
if(empty($_POST["email"])){
    $error .= 'Ingresa un E-mail</br>';
}else{
    $email = $_POST["email"];
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $error .= 'Ingresa un E-mail verdadero</br>';
    }else{
        $email = filter_var($email,FILTER_SANITIZE_EMAIL);
    }
}


//CUERPO DEL MENSAJE
$cuerpo .= "Nombre: ";
$cuerpo .= $nombre;
$cuerpo .= "\n";

$cuerpo .= "apellido: ";
$cuerpo .= $apellido;
$cuerpo .= "\n";

$cuerpo .= "DNI: ";
$cuerpo .= $DNI;
$cuerpo .= "\n";

$cuerpo .= "nacimiento: ";
$cuerpo .= $nacimiento;
$cuerpo .= "\n";

$cuerpo .= "email: ";
$cuerpo .= $email;
$cuerpo .= "\n";
 


//DIRECCIÓN
$enviarA = $email; 
$asunto = 'Nuevo mensaje de mi sitio web';

//ENVIAR CORREO
if($error == ''){
    $success = mail($enviarA,$asunto,$cuerpo,'de: '.$email);
    echo 'exito';
}else{
    echo $error;
}



?>