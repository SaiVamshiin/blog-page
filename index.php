


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

 while( $donnees = $req->fetch());
 var_dump($donnees);

  //while show all posts