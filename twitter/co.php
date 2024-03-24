<?php
    session_start(); // Add this line to start the session
    include 'trycatch.php';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $pseudo = $_POST['pseudo'];
    $password = $_POST['password'];

    $requete = $database->prepare("SELECT * FROM user WHERE pseudo = :pseudo");
    $requete->execute(['pseudo' => $pseudo]);
    $user = $requete->fetch(PDO::FETCH_ASSOC);

    if($user && $password == $user['password']){
        
        $_SESSION['pseudo'] = $pseudo;
        $_SESSION['id'] = $user['id'];
        header('Location: tweet.php');
    }
    else{
        echo 'Mauvais identifiants';
    }
}
?>