<?php
session_start();
    require 'trycatch.php';
    if($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['form'] == 'tweet'){
        if($_POST['tweet'] != ''){
    
        $newTweet = [
            'tweet' => $_POST['tweet'],
            'user_id' => $_SESSION['id']
        ];
        $requete = $database->prepare("INSERT INTO tweet (id, contenu, user_id) VALUES (NULL,:tweet , :user_id);");
        if($requete->execute($newTweet)){ //execute renvoie true ou false, ici on vérifie si c'est true
            header('Location: tweet.php');
        }
        else{
            echo 'Erreur lors de l\'ajout';
        }
        }
        else{
            echo 'Veuillez remplir tous les champs';
        }
    }