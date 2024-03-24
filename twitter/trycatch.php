<?php
try{
    $database = new PDO('mysql:host=localhost;dbname=Twitter','root','root');
}
catch(PDOException $e){
        die('Site indisponible');
}
?>