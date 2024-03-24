<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pwitter</title>
    <link rel="stylesheet" href="tweet.css">
</head>
<body>
    <header>
    <h1>Bienvenue sur Pwitter</h1>
    </header>
    <main>
    <h2>Connectez-vous</h2>
    <form action="co.php" method="POST">
        <p>
        <label for="pseudo"><h3>Pseudo :</h3></label> </br>
        <div class="input-box">
        <input type="text" name="pseudo" id="pseudo"></div>
        </p>
        <p>
        <label for="password"><h3>Mot de passe :</h3></label> </br>
        <div class="input-box">
        <input type="password" name="password" id="password">
        </div>
        </p>
        <button type="submit">Se connecter</button>
    </form>
    <h4>Vous n'avez pas de compte Pwitter?</h4>
    <a href="adduser.php"><button>S'inscrire</button></a>
    </main>
</body>
</html>