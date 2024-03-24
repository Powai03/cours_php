<?php
    require 'database.php';
if($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['form'] == 'suppr'){
    $idToDelete = [
        'id'=> $_POST['supprimer']
    ];

$delete = $database->prepare("DELETE FROM user WHERE id = :id");//:id clé tableau
$delete->execute($idToDelete);
header('Location: adduser.php');
}

?>