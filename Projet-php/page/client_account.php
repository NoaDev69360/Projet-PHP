<?php
require_once 'layout/head.php';
require_once 'layout/navbar.php';
require_once __DIR__ . '/data/modification_process.php';
require_once __DIR__. '/data/delete_process.php';
?>

<h1 class="text-center mt-5">Bonjour <?php echo isset($_SESSION['prenom']) ? $_SESSION['prenom'] : ''; ?></h1>

<div class="col-lg-5 mx-auto mt-5">
  
    <form method="post">
      <div class="col">
        <input type="text" class="form-control mb-3" value="<?php echo isset($_SESSION['nom']) ? $_SESSION['nom'] : ''; ?>" name="account_nom">
      </div>
      <div class="col">
        <input type="text" class="form-control mb-3" value="<?php echo isset($_SESSION['prenom']) ? $_SESSION['prenom'] : ''; ?>" name="account_prenom">
      </div>
      <div class="col">
        <input type="texte" class="form-control mb-3" value="<?php echo isset($_SESSION['sexe']) ? $_SESSION['sexe'] : ''; ?>" name="account_sexe">
      </div>
      <div class="col">
        <input type="text" class="form-control mb-3" value="<?php echo isset($_SESSION['email']) ? $_SESSION['email'] : ''; ?>" name="account_email">
      </div>
      <div class="col">
        <input type="text" class="form-control mb-3" value="<?php echo isset($_SESSION['adresse']) ? $_SESSION['adresse'] : ''; ?>" name="account_adresse">
      </div>
      <div class="col">
        <input type="text" class="form-control mb-3" value="<?php echo isset($_SESSION['numero_permis']) ? $_SESSION['numero_permis'] : ''; ?>" name="account_permis">
      </div>
      <div class="col">
        <input type="text" class="form-control mb-3" value="<?php echo isset($_SESSION['numero_telephone']) ? $_SESSION['numero_telephone'] : ''; ?>" name="account_tel">
      </div>
      <div class="col">
        <input type="date" class="form-control mb-3" value="<?php echo isset($_SESSION['date_naisssance']) ? $_SESSION['date_naissance'] : ''; ?>" name="account_date">
      </div>
      </div>
      <div class="button">
        <div class="d-flex justify-content-center gap-3 mb-3">
      <button type="submit" class="btn btn-primary">Confirmer</button>
        </div>
      </div>
    </form>

<form method="post">
  <div class="d-flex justify-content-center gap-3 mb-4">
    <input type="hidden" value="delete_user" name="delete_user">
    <button type="submit" class="btn btn-danger">Supprimer mon compte</button>
  </div>
</form>