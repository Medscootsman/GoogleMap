<?php
/**
 * Created by PhpStorm.
 * User: 1607084
 * Date: 07/11/2016
 * Time: 15:02
 */

include "scripts/dbconnect.php";


// Start XML file, create parent node

$dom = new DOMDocument("1.0");
$node = $dom->createElement("markers");
$parnode = $dom->appendChild($node);


echo $dom->saveXML();


?>
