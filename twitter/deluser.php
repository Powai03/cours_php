<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pwitter</title>
    <link rel="stylesheet" href="tweet.css">
</head>
<body>
    <?php
    session_start();
require 'database.php';
echo"<header><h1>Supprimer votre compte</h1></header>";
echo "<div class='main'>";
foreach($users as $user){
    if($user['id'] == $_SESSION['id']){
    echo '<h1>'.$user['pseudo'].'</h1>';    
    ?>
    <form action="delete.php" method="POST">
        <input type="hidden" name="form" value="suppr">
        <input type="hidden" name="supprimer" value="<?php echo $user['id']; ?>">
        <button type="submit">Supprimer ce compte</button>
        </form>
        <button><a href="tweet.php">Retour</a></button>
        </div>
    <?php 
}}
    ?>
</body>
</html>