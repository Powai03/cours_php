<?php

include 'trycatch.php';

$requete = $database->prepare("SELECT * FROM user ORDER BY createdAt DESC"); 
//ou ASC pour changer l'ordre, ajouter LIMIT 0,5 pour afficher les 5 premiers, ajouter LIKE pour chercher un mot dans la bdd %mot% pour chercher un mot dans un mot
//$requete = $database->prepare("SELECT pseudo, mail FROM user");
$requete->execute();
$users = $requete->fetchAll(PDO::FETCH_ASSOC);



if($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['form'] == 'ajout'){
    if($_POST['pseudo'] != '' && $_POST['mail'] != '' && $_POST['password'] != ''){

    $newUser = [
        'pseudo' => $_POST['pseudo'],
        'mail' => $_POST['mail'],
        'password' => $_POST['password']
    ];
    $requete = $database->prepare("INSERT INTO user(pseudo,mail,password) VALUES(:pseudo,:mail,:password)");
    if($requete->execute($newUser)){ //execute renvoie true ou false, ici on vérifie si c'est true
        echo 'Utilisateur ajouté';
        header('Location: connexion.php');
    }
    else{
        echo 'Erreur lors de l\'ajout';
    }
    }
    else{
        echo 'Veuillez remplir tous les champs';
    }
}
?>
