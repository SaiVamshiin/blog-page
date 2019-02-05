<?php
$servername = "localhost:8889"; // si bug avec mamp mettre MySQL port.
$username = "root";
$password = "root";
$database = "blog-talis";

try {
    $db = new PDO("mysql:host=$servername;dbname=$database", $username, $password); // use $database pour allez plus vite et use direct la variable // $db pour base de donnée plus simple à comprendre
    // set the PDO error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>