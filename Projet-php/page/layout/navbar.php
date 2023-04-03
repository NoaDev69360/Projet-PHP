<nav class="navbar navbar-expand-lg bg-light opacity-75">
  <div class="container-fluid">
    <a class="navbar-brand text-black" href="index.php">CarDeluxe</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-black" href="Voiture.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Voitures
          </a>
          <div class="header3">
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="supercar.php">Supercar</a></li>
              <li><a class="dropdown-item" href="citadine.php">Citadine</a></li>
              <li><a class="dropdown-item" href="familiale.php">Familiale</a></li>
              <li><a class="dropdown-item" href="Voiture.php">Catégorie</a></li>
            </ul>
          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link text-black" href="a_propos.php">A propos de nous</a>
        </li>
        <li class="nav-item text-black">
          <a class="nav-link text-black" href="client_account.php">Mon compte</a>
        </li>
        <?php
        session_start();

        if (isset($_POST['logout'])) {
          session_destroy();
          header("Location: identification.php");
          exit();
        } ?>
        <div class="deconnexion">
          <form method="post" action="">
            <input type="submit" name="logout" value="Deconnexion">
          </form>
        </div>

      </ul>
    </div>
  </div>
</nav>