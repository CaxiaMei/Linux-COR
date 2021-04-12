<?php 
$sitio    = "localhost";
$usuario  = "servic64_igni870";
$base	  = "servic64_igni870";
$pass	  = "12345";

$conecta = new mysqli($sitio, $usuario, $pass, $base); 

$ulat=$_POST['lat'];
$ulong=$_POST['lon'];
$ub='{ "lat": '.$ulat.', "lng": '.$ulong.'}';
$cod_p=$_POST['cp'];
 $consCoord=$conecta->query("insert into ubicacion_afiliado (id_afiliado,ubicacion,CP) values ('8', '".$ub."', '".$cod_p."')");
echo "insert into ubicacion_afiliado (id_afiliado,ubicacion,CP) values ('8', '".$ub."', '".$cod_p."')";
?>