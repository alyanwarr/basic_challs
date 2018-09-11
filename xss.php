<!-- http://localhost:8000/xss.php?input=<script>alert(1)</script>
http://localhost:8000/xss.php?input=<script>alert(document.cookie)</script> --> 

<p> Usage: http://localhost:8000/xss.php?input=your_name <p>

<?php

$input = $_GET["input"];

echo "<br> Hello ".$input." !<br>";


?>
