


 <?php 
    session_start();
    require_once 'nav-bar.php';
    require 'database.php';
    
    ?>
 <h1>Blog-Talis</h1>
<?php
 //Select all post to dba_close
 $req = $db->query('SELECT * FROM posts');
 $req->execute();

  //while show all posts
  while($row = $req->fetch(PDO::FETCH_ASSOC)){
     echo "<h2>{$row["title"]}<h2>";
     
     echo "<p>{$row["content"]}<p>";
  
  }