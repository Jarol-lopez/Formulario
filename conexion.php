<?php
$datos= 'mysql:host=localhost;dbname=id19439236_root';
$usuario='id19439236_ingresar';
$contraseña='Wu88y/WhoevDKY(t';


try{
    $conexion = new PDO($datos,$usuario,$contraseña);
    //echo 'conectado';
}catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage(). "<br/>";
    die();
}
?>