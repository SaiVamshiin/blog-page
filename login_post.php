<?php
require "database.php";

$req = $db->prepare('SELECT * FROM user WHERE pseudo = :pseudo AND password =:password'); //req pour requête -- le $db de la page database.php // Select * --> choisir une colonne
$req->execute(array(  // execute la variable)
    "pseudo" => $_POST["pseudo"],
    "password" => $_POST ["password"]
));

$result = $req->fetch();

if(!$result){
    header("Location: login.php?message=Erreur de password");
} else{
    session_start();
    var_dump($_SESSION);
    $_SESSION ["pseudo"] = $_POST["pseudo"];
    header("Location: admin.php");

}

// // Si pseudo égale à admin et password égale à admin
// if($_POST["pseudo"] === "admin" && $_POST["password"] === "admin") {
//     session_start();
//     var_dump($_SESSION);
//     $_SESSION ["pseudo"] = $_POST["pseudo"];
//     header("Location: admin.php");
// }else if($_POST["password"] !== "admin"){
//     header("Location: login.php?message=Erreur de password");
// }else if($_POST["pseudo"] !== "admin"){
//     header("Location: login.php?message=Erreur de pseudo");
// }