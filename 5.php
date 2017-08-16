<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>5</title>
  </head>
  <body>
    <h3>Numeros Por Teclado 1,2,3,4,5,6,7,8,9,10 </h3>

    <?php
$Num = array(1,2,3,4,5,6,7,8,9,10);
$Suma = ($Num[0] + $Num[1] + $Num[2] + $Num[3] + $Num[4] + $Num[5] + $Num[6] + $Num[7] + $Num[8] +$Num[9] );
echo " los numeros del 1 al 10 la suma es :$Suma </br>";
$Resta = ($Num[0] - $Num[1] - $Num[2] - $Num[3] - $Num[4] - $Num[5] - $Num[6] - $Num[7] - $Num[8] -$Num[9] );
echo "los numeros del 1 al 10 la Resta es $Resta </br>";
$Multipli = ($Num[0] * $Num[1] * $Num[2] * $Num[3] * $Num[4] * $Num[5] * $Num[6] * $Num[7] * $Num[8] * $Num[9] );
echo " los numeros del 1 al 10 la Multipli es $Multipli </br>";
$Division = ($Num[0] / $Num[1] / $Num[2] / $Num[3] / $Num[4] / $Num[5] / $Num[6] / $Num[7] / $Num[8] / $Num[9] );
echo " los numeros del 1 al 10 la Division es $Division </br>";
     ?>
  </body>
</html>
