<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<h1> <b> Calculator </b> </h1>

<form  method="post">

<input type="number" name="getal1" value=""> <b>First Number</b>
<input type="number" name="getal2" value=""> <b>Second Number</b>
<p></p>
<input type="submit" name="switch" value="Add">
<input type="submit" name="switch" value="Subtract">
<input type="submit" name="switch" value="Multiply">
<input type="submit" name="switch" value="Divide">
<input type="submit" name="switch" value="Modulo">
<br>
    </form>
<?php

$eerste = (int)$_POST["getal1"];
$tweede = (int)$_POST["getal2"];
if (isset($_POST["switch"])) {


switch ($_POST["switch"]) {

case 'Add':
    $antwoord = $eerste + $tweede;
      echo "<h1>Antwoord: </h1>" . $antwoord;
        break;
case 'Multiply':
    $antwoord = $eerste * $tweede;
      echo "<h1>Antwoord: </h1>" . $antwoord;
        break;
case 'Subtract':
    $antwoord = $eerste - $tweede;
      echo "<h1>Antwoord: </h1>" . $antwoord;
        break;
case 'Divide':
    $antwoord = $eerste / $tweede;
      echo "<h1>Antwoord: </h1>" . $antwoord;
        break;
      }
}
 ?>

  </body>
</html>
