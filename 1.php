<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>1</title>
  </head>
  <body>
 <?php
$InformacionPersonal= array("Pedro Torres","calle_20", "1425698");
 list($nombre, $Direccion, $Telefono) = $InformacionPersonal;
 echo "La InformacionPersonal es  $nombre, $Direccion , $Telefono.";
 ?>
</body>
</html>
