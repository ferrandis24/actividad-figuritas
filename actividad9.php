<?php
//Ejercicio 1
$i=0;
while ($i < 5) {
  $i=$i+1;
 echo "*";
 echo "<br>";
}
echo "<br>";
echo "<br>";
//Ejercicio 2
for ($i=0; $i < 5; $i++) {
echo "****";
  for ($j=0; $j < 1; $j++) {
    echo "<br>";
  }
}
echo "<br>";
echo "<br>";
//Ejercicio 3
$ast="";
for ($i=0; $i < 6; $i++) {
  $ast=$ast."*";
  echo "$ast";
  echo "<br>";
}
echo "<br>";
echo "<br>";
//Ejercicio 4
$asterisco="*";
for ($i=0; $i < 3; $i++) {
  echo "$asterisco";
  $asterisco=$asterisco."**";
  echo "<br>";
}
$asterisco2="*";
$asteriscos="*";
for ($j=0; $j <1 ; $j++) {
 $asteriscos=$asteriscos."**";
 echo "$asteriscos";
 echo "<br>";
 echo "$asterisco2";
  echo "<br>";
}
echo "<br>";
echo "<br>";
//Ejercicio 5
$asterisco5="*";
for ($k=0; $k < 9; $k=$k+2) {
for ($j=0; $j < 9 - $k - 1; $j++) {
  echo "&nbsp";
}
for ($i=0; $i < 1; $i++) {
  echo "$asterisco5";
  $asterisco5=$asterisco5."**";
  echo "<br>";
  echo "<br>";

}
}
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  </body>
</html>
