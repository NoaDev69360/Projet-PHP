<?php
session_start();
require_once 'config.php';

if (isset($_POST['email_c']) && isset($_POST['password_c'])) {
    $email = htmlspecialchars($_POST['email_c']);
    $password = htmlspecialchars($_POST['password_c']);

    $check = $pdo->prepare("SELECT email_c, password_c FROM client WHERE email_c =:email AND password_c=:mdp");
    $check->execute(["email" => $email, "mdp" => $password]);
    $data = $check->fetch();

    if ($data === false) {
        header('Location: login.php?login_err=password');
    } else {
        header('location: index.php');
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $password = hash('sha256', $password);

            if ($data['mdp'] == $password && $data['email'] == $email) {
                header('Location:index.php');
            }
        }
    }
}
