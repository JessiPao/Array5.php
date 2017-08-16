<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>3</title>
  </head>
  <body>

    <?php
    $Num = array(1,2,3,4,5,6,7,8,9,10);
sort($Num);
foreach ($Num as $key => $val) {
    echo "Numeros[" . $key . "] = " . $val . "<br>";
}
     ?>
  </body>
</html>
