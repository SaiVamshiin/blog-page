<?php
// Si pseudo égale à admin et password égale à admin
if($_POST["pseudo"] === "admin" && $_POST["password"] === "admin") {
    session_start();
    var_dump($_SESSION);
    $_SESSION ["pseudo"] = $_POST["pseudo"];
    header("Location: admin.php");
}else if($_POST["password"] !== "admin"){
    header("Location: login.php?message=Erreur de password");
}else if($_POST["pseudo"] !== "admin"){
    header("Location: login.php?message=Erreur de pseudo");
}