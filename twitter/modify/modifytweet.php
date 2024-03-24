<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><?php 
    $tweet = $_POST['tweet'];
    echo $_POST['tweet'];?></p>
    
<form action="modify.php" method="POST">
    <input type="hidden" name="form" value="modify">
    <input type="hidden" name="tweet" value="<?php $tweet ?>">
    <textarea name="newtweet" placeholder="Nouveau pweet modifié"></textarea>
    <button type="submit">Modifier</button>
</form>
</body>
</html>
