<?php session_start();
require_once __DIR__ . '/data/connexion_process.php'; ?>
<?php require_once __DIR__ . '/data/inscription_process.php'; ?>
<?php require_once __DIR__ . '/layout/head.php'; ?>

<div class="row">
  <div class="col-lg-6">
    <h1 class="text-center my-5">Connexion</h1>
    <form method="post">
      <div class="connexion">
        <div class="mb-3 d-flex justify-content-center">
          <label for="inputEmail3" class=" col-form-label"></label>
          <div class="col-sm-6">
            <input type="email" class="form-control" name="email" placeholder="jean@gmail.com">
          </div>
        </div>
        <div class="mb-3 d-flex justify-content-center">
          <label for="inputPassword3" class=" col-form-label"></label>
          <div class="col-sm-6">
            <input type="password" class="form-control" name="password" placeholder="mot de passe">
          </div>
        </div>
        <div class="button">
          <div class="d-flex justify-content-center gap-3">
            <button type="Connexion" class="btn btn-primary">Connexion</button>
          </div>
        </div>
      </div>
    </form>
  </div>

  <div class="col-lg-6">
    <h1 class="text-center my-5">Inscription</h1>
    <form method="post">
      <div class="connexion">
        <div class="mb-3 d-flex justify-content-center">
          <label for="inputEmail3" class=" col-form-label"></label>
          <div class="col-sm-6">
            <input type="email" class="form-control" name="email_c" placeholder="jean@gmail.com">
          </div>
        </div>

        <div class="mb-3 d-flex justify-content-center">
          <label for="inputPassword3" class=" col-form-label"></label>
          <div class="col-sm-6">
            <input type="text" class="form-control" name="nom_c" placeholder="Nom">
          </div>
        </div>

        <div class="mb-3 d-flex justify-content-center">
          <label for="inputPassword3" class=" col-form-label"></label>
          <div class="col-sm-6">
            <input type="text" class="form-control" name="prenom_c" placeholder="prenom">
          </div>
        </div>

        <div class="mb-3 d-flex justify-content-center">
          <label for="inputPassword3" class=" col-form-label"></label>
          <div class="col-sm-6">
            <select class="form-select" id="inputGroupSelect01" name="sexe_c">
              <option selected></option>
              <option value="1">Homme</option>
              <option value="2">Femme</option>
            </select>
          </div>
        </div>

        <div class="mb-3 d-flex justify-content-center">
          <label for="inputPassword3" class=" col-form-label"></label>
          <div class="col-sm-6">
            <input type="text" class="form-control" name="adresse_c" placeholder="adresse">
          </div>
        </div>

        <div class="mb-3 d-flex justify-content-center">
          <label for="inputPassword3" class=" col-form-label"></label>
          <div class="col-sm-6">
            <input type="text" class="form-control" name="numero_permis_c" placeholder="numero de permis">
          </div>
        </div>

        <div class="mb-3 d-flex justify-content-center">
          <label for="inputPassword3" class=" col-form-label"></label>
          <div class="col-sm-6">
            <input type="text" class="form-control" name="numero_telephone_c" placeholder="telephone">
          </div>
        </div>

        <div class="mb-3 d-flex justify-content-center">
          <label for="inputPassword3" class=" col-form-label"></label>
          <div class="col-sm-6">
            <input type="text" class="form-control" name="date_naissance_c" placeholder="AAAA-MM-JJ">
          </div>
        </div>

        <div class="mb-3 d-flex justify-content-center">
          <label for="inputPassword3" class=" col-form-label"></label>
          <div class="col-sm-6">
            <input type="password" class="form-control" name="password_c" placeholder="Mot de passe">
          </div>
        </div>

        <div class="button">
          <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-success" name="inscription">Inscription</button>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
<?php
