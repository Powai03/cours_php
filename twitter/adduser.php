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
require 'database.php';

?>
<header>
    <h1>S'inscrire sur Pwitter</h1>
</header>
    <main>
    <form action="database.php" method="POST">
        
        <input type="hidden" name="form" value="ajout">

        <label for="pseudo"><h2>Pseudo :</h2></label>
        <div class="input-box">
        <input type="text" name="pseudo" id="pseudo">
        </div>
        
        <label for="password"><h2>Mot de passe :</h2></label>
        <div class="input-box">
        <input type="password" name="password" id="password">
        </div>
        
        <label for="mail"><h2>Email :</h2></label>
        <div class="input-box">
        <input type="email" name="mail" id="mail">
        </div>
        <button type="submit">Envoyer</button>
    </form>
    <h4>Vous avez déjà un compte Pwitter?</h4>
    <a href="connexion.php"><button>Se connecter</button></a>
    </main>
</body>
</html>