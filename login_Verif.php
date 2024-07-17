<?php
require 'config.php'; 

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $nom = $_GET['nom'];
    $motdepasse = $_GET['motdepasse'];

   
    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username");
    $stmt->execute(['username' => $nom]);
    $user = $stmt->fetch();

    if ($user && password_verify($motdepasse, $user['password'])) {
        header('Location: produits.php');
        exit;
    } else {
        header('Location: login_fail.php');
    }
}
?>