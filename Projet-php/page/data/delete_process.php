<?php
require_once __DIR__ . '/DBinitializer.php';


if(isset($_POST['delete_user'])){
    $stmt = $pdo->prepare ("DELETE FROM client WHERE id_c =:id_c");
    $stmt->execute([
        'id_c' => $_SESSION['id_c']
    ]);
    $result = $stmt->fetch();
    session_destroy();
    header("Location: identification.php");
    exit();
}