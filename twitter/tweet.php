<?php
require 'co.php';
require 'database.php';
?>
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
$tweets = $database->prepare("SELECT * FROM tweet INNER JOIN user ON tweet.user_id = user.id "); //table.colonne
$tweets->execute();
$tweet = $tweets->fetchAll(PDO::FETCH_ASSOC);

if($_SESSION['id'] != NULL){

echo "<header><h1>Pwitter</h1></header>";
?>
<div class="haut">
<h2>Bienvenue, <?php echo $_SESSION['pseudo'];?></h2>
    <a href="deco.php"><button>Déconnexion</button></a>
</div>
<div class="haut">
    <form action="addtweet.php" method="POST">
        <input type="hidden" name="form" value="tweet">
        <div class="input-box">
        <input type="text" name="tweet" id="tweet" placeholder="Rien que ça pweet ici">
        </div>
        <button type="submit">Envoyer</button>
    </form>
    <form method="GET">
        <input type="hidden" name="form" value="search">
        <div class="input-box">
        <input type="text" name="search" id="search" placeholder="Rechercher un pweet">
        </div>
        <button type="submit" href="tweet.php?id=<?php echo $_GET['search']; ?>">>Rechercher</button>
    </form>
</div>
<?php

if(isset($_GET['search']) AND $_GET['search'] != ""){
    $tweet = $database->prepare("SELECT * FROM tweet INNER JOIN user ON tweet.user_id = user.id WHERE contenu LIKE :search");
    $tweet->execute(['search' => '%'.$_GET['search'].'%']);
    echo "<h4>Résultat de la recherche pour : " . $_GET['search'] . "</h4><br/>";
    if($tweet == NULL){
        echo "Aucun résultat";
    }
    if($tweet != NULL){
        foreach ($tweet as $t) {
            echo "<main>";
            echo "<h3>".$t['pseudo'] . " a pweeté : <br/> </h3>";
            echo "<h4>".$t['contenu'] . "<br/>  </h4>";
            if($t['user_id'] == $_SESSION['id']){?>
            <form action="deletetweet.php" method="POST">
                <input type="hidden" name="form" value="tweet">
                <input type="hidden" name="supprimer" value="<?php echo $p['contenu']; ?>">
                <button type="submit">Supprimer</button>
            </form>
    <?php
    }
    echo "</main>";
            }
        }
    }
else{
    echo "<h2> Derniers pweets : <br/> </h2>";
    /* $p = 0; */
foreach ($tweet as $t) {
    echo "<main>";
    echo "<h3>".$t['pseudo'] . " a pweeté : <br/> </h3>";
    echo "<h4>".$t['contenu'] . "<br/>  </h4>";
    if($t['user_id'] == $_SESSION['id']){?>
        <form action="deletetweet.php" method="POST">
            <input type="hidden" name="form" value="tweet">
            <input type="hidden" name="supprimer" value="<?php echo $t['contenu']; ?>">
            <button type="submit">Supprimer</button>
        </form>
        <!-- <form action="modifytweet.php" method="POST">
                <input type="hidden" name="form" value="modify">
                
                <input type="hidden" name="tweet" value="<?php/*  echo $t['contenu'];  */?>">
                <button type="submit" href="modifytweet.php">Modifier</button>
        </form> -->
    <?php
    }
    echo "</main>";
}
/* $p++; */
}

echo "<button><a href='deluser.php'>Supprimer votre compte</a></button>";
}
else{
    echo "Vous n'êtes pas connecté. <br/>";
    echo "<a href='connexion.php'>Se connecter</a>";
}
?>
</body>
</html>