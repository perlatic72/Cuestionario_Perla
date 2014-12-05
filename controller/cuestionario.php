<?php
require('header.php');
$mensaje="Cuestionario";
$variables=array('mensaje'=>$mensaje,);
//require('Usuario.php');
//$usuario = new Usuario();
//$usuario->validar($user,$psw);
view('cuestionario',$variables);
require('footer.php');
?>