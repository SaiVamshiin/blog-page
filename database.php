<?php
$servername = "localhost:8889"; // si bug avec mamp mettre MySQL port.
$username = "root";
$password = "root";
$database = "blog-talis";

try {
    $db = new PDO("mysql:host=$servername;dbname=$database", $username, $password); // use $database pour allez plus vite et use direct la variable // $db pour base de donnée plus simple à comprendre
    // set the PDO error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

// $servername = "localhost:8889"; // si bug avec mamp mettre MySQL port.
// $title = "root";
// $content = "root";
// $database = "blog-talis";

//     try {
//         $dbp = new PDO("mysql:host=$servername;dbname=$database", $title, $content); // use $database pour allez plus vite et use direct la variable // $db pour base de donnée plus simple à comprendre
//         // set the PDO error mode to exception
//         $dbp->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//         }
//     catch(PDOException $e)
//         {
//         echo "Connection failed: " . $e->getMessage();
//         }





// ?>
