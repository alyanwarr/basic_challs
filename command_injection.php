<html>
<!-- http://localhost:8000/command_injection.php?input=127.0.0.1
http://localhost:8000/command_injection.php?input=127.0.0.1;whoami
Bypass white spaces: http://localhost:8000/command_injection.php?input=127.0.0.1;ls>tmp.txt;cat<tmp.txt -->

<h1> Pinging Service </h1>

<p> Usage: http://localhost:8000/command_injection.php?input=127.0.0.1 </p>

<?php

$input = $_GET["input"];

system("ping -c 1 ".$input);

?>

</html>
