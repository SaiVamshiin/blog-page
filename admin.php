<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>blog</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    
</head>
<body>
<?php

var_dump($_GET);
var_dump($_POST);

?>
<?php

if ($_POST ["pseudo"] ==="admin" && $_POST ["password"] ==="admin"){
   echo "Bonjour";
} else if ($_POST ["password"] !== "admin"){
    header("Location: login.php?message=Erreur de password");
} else if ($_POST ["pseudo"] !== "admin"){
    header("Location: login.php?message=Erreur de pseudo");
}
   
 ?>
</body>
</html>