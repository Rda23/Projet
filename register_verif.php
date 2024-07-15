<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $_POST['login'];
    $mail = $_POST['mail'];
    $motdepasse = $_POST['motdepasse'];

    $data = "Login: $login | Mail: $mail | Mot de passe: $motdepasse" . PHP_EOL;
    $file = 'comptes.txt';

    if (file_put_contents($file, $data, FILE_APPEND | LOCK_EX) !== false) {
        header('Location: register_succes.php');
    } else {
        echo "Erreur dans la saisie";
    }
}
?>
