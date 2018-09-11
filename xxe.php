<!-- curl -d @xml1.txt http://localhost:8000/xxe.php
curl -d @xml2.txt http://localhost:8000/xxe.php --> 

<?php 
    libxml_disable_entity_loader (false);
    $xmlfile = file_get_contents('php://input');
    $dom = new DOMDocument();
    $dom->loadXML($xmlfile, LIBXML_NOENT | LIBXML_DTDLOAD);
    $logme = simplexml_import_dom($dom);
    $username = $logme->username;
    $password = $logme->password;
    echo "Successful login as:  $username";
?> 
