<?php
    require 'database.php';
if($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['form'] == 'tweet'){
    $tweetToDelete = [
        'tweet'=> $_POST['supprimer']
    ];

$tdelete = $database->prepare("DELETE FROM tweet WHERE contenu = :tweet");//:id clé tableau
$tdelete->execute($tweetToDelete);
header('Location: tweet.php');
}

?>