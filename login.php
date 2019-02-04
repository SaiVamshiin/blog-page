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
    
<form action="login_post.php" method="post">
    
    <label for="nom">Pseudo</label>
    <input type="text" class="form-control" id="pseudp" placeholder="Pseudo" name="pseudo">

    <label for="nom">Password</label>
    <input type="passowrd" class="form-control" id="password" placeholder="Password" name="password">

    <input type="submit" value="Envoyer">

    </form>

    <?php 
    if( isset($_GET["message"]) ){
        ?>
        <div class="col-md-6">
     <div class="alert-danger" role="alert">
         <?= $_GET ["message"] ?>
         </div> <div>
         <?php } 

         ?>
  
</body>
</html>