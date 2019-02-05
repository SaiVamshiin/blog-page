<?php
session_start();
require "database.php";

// prepare req
// executer req
// Redirect to admin + mssg (login post --> insert)

$title = $_POST["title"];
$content = $_POST["content"];

$req = $db->prepare('INSERT INTO posts (title, content) VALUES(:title, :content)'); 
$req->execute(array(  // execute la variable)
    "title" => $title,
    "content" => $content
));

// $result = $req->fetch();

//     if(!$result){
//         header("Location: add_post-post?message=Erreur de password");
//     } else {
//         session_start();
//         var_dump($_SESSION);
//         $_SESSION [""] = $_POST[""];
         header("Location: admin.php?message=Success to insert");

//     }
    
   



?>  