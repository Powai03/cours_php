
<?php
require 'database.php';
if(isset($_POST['newtweet'])) {
        // Échappe les caractères spéciaux pour éviter les injections SQL
        $modified_tweet = htmlspecialchars($_POST['newtweet']);
        
        
        $update_tweet = $database->prepare("UPDATE tweet SET contenu = :contenu WHERE tweet.contenu = :ancien");
        $update_tweet->bindParam(':contenu', $modified_tweet);
        $update_tweet->bindParam(':ancien', $_POST['tweet']);
        $update_tweet->execute();
        
        header('Location: tweet.php');
        exit();
    } else {
        echo "Veuillez saisir le contenu du tweet.";
    }

?>