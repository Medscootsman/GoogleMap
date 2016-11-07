<?php
/**
 * Created by PhpStorm.
 * User: 1607084
 * Date: 07/11/2016
 * Time: 14:55
 */
$conn = new mysqli(
    "eu-cdbr-azure-west-a.cloudapp.net",
    "bd60154681be9d",
    "498a748a",
    "1607084" );

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>

