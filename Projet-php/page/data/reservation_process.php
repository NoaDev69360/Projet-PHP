<?php
session_start();
require_once __DIR__ . '/DBinitializer.php';
if (!empty($_GET) && isset($_POST['confirmation'])&& isset($_GET['debut']) && isset($_GET['fin']) && isset($_GET['carId'])) {
    require_once 'config.php';
    $carId = $_GET['carId'];
    $clientId = $_SESSION['id_c'];
    $debut = new DateTimeImmutable($_GET['debut']);
    $fin = new DateTimeImmutable($_GET['fin']);
    $interval = $debut->diff($fin);

    $stmt = $pdo->prepare ("SELECT * FROM voiture WHERE id =:carId");
    $stmt->execute([
        'carId' => $carId,
    ]);
    $result = $stmt->fetch();   

    $prixTotale = $interval->format('%R%a') * $result['prix'];
    $insertUser = $pdo->prepare('INSERT INTO reservation(dateDebut,dateFin,prix_totale,id_client,id_voiture) VALUES (?,?,?,?,?);');
    $insertUser->execute(array($_GET['debut'], $_GET['fin'], $prixTotale, $clientId,$carId));
    header('Location: validate_reservation.php');
}

?>
