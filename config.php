<?php
$servername = "localhost";
$susername = "root";
$pasword = "";
$dbname = "pt_sugity_creatives";

$conn = new mysqli($servername, $susername, $pasword, $dbname);

if ($conn->connect_error){
    die("Connection faild: " . $conn->connect_error);
}

?>