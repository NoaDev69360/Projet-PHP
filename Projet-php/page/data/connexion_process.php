<?php
if (!empty($_POST) && isset($_POST['email']) && isset($_POST['password'])) {
  
  require_once __DIR__ . '/DBinitializer.php';

  ['email' => $email, 'password' => $pass] = $_POST;

  $stmt = $pdo->prepare("SELECT * FROM client WHERE email_c=:email AND password_c=:pass");
  $stmt->execute([
    'email' => $email,
    'pass' => $pass
  ]);

  $user = $stmt->fetch();
  if ($user === false) {
    echo "Une erreur est survenue lors de votre authentification veuillez réesseyer !";
  } else {
    $_SESSION['id_c'] = $user['id_c'];
    $_SESSION['nom'] = $user['nom_c'];
    $_SESSION['prenom'] = $user['prenom_c'];
    $_SESSION['sexe'] = $user['sexe_c'];
    $_SESSION['email'] = $user['email_c'];
    $_SESSION['adresse'] = $user['adresse_c'];
    $_SESSION['numero_permis'] = $user['numero_permis_c'];
    $_SESSION['numero_telephone'] = $user['numero_telephone_c'];
    $_SESSION['date_naissance'] = $user['date_naissance_c'];
  }
  if(isset ($_SESSION['id_c']) && ($_SESSION['nom']) && ($_SESSION['prenom']) && ($_SESSION['sexe']) && ($_SESSION['email']) && ($_SESSION['adresse']) && ($_SESSION['numero_permis']) && ($_SESSION['numero_telephone']) && ($_SESSION['date_naissance'])){
    header("Location: index.php");
}
}