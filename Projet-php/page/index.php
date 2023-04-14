<?php
require_once 'layout/head.php';
?>

<body>
  <?php
  require_once 'layout/navbar.php';
  ?>
        <section class="top">
          <div>
              <img src="../img/lambo.jpg" alt="">
          </div>
        </section>

        <section class="bloc1">
          
          <div class="container1">
            <h1>Conduisez l'Excellence avec nous</h1>
            <hr>
            <p class="left">Bienvenue sur notre site de location de voiture de luxe, où vous pouvez trouver la voiture de vos rêves
              pour une expérience de conduite inoubliable. Nous proposons une large gamme de voitures haut de gamme,
              allant des modèles classiques aux voitures les plus récentes et les plus avancées sur le marché.
              Nos véhicules sont soigneusement sélectionnés pour leur performance exceptionnelle,
              leur design élégant et leur technologie de pointe. Nous mettons un point d'honneur
              à offrir un service de qualité supérieure, avec une équipe de professionnels expérimentés
              pour vous guider dans le choix de votre voiture de location et répondre à toutes vos questions et demandes.
              Que ce soit pour un voyage d'affaires ou des vacances en famille, notre flotte de voitures de luxe
              est prête à répondre à tous vos besoins de transport avec style et confort. Réservez dès maintenant
              et laissez-nous vous offrir une expérience de conduite inoubliable.    
            </p>
          </div>
          <img src="../img/amg-gt.jpg" alt="">
          <a href="Voiture.php"><button class="bouton1">Nos voitures</button></a>
        </section>

        <iframe class="video" width="100%" height="450" src="https://www.youtube.com/embed/yESHN8gRh04" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

        <section class="bloc2"> 
          <div class="container2">
            <h1>Explorez le luxe de conduire</h1>
            <hr>
            <p class="right">Que vous cherchiez une voiture sportive pour une escapade
              en week-end ou une limousine pour une soirée spéciale, cette agence a un
              large choix de véhicules de luxe disponibles à des prix incroyablement bas.
              Vous pouvez louer une voiture de luxe pour une journée, une semaine ou même
              un mois, selon vos besoins.En choisissant cette agence de location de
              voiture de luxe, vous pouvez être sûr de profiter d'un service exceptionnel
              et d'un confort de conduite inégalé. Alors n'attendez plus, réservez dès
              maintenant et profitez de ces tarifs imbattables !
            </p>
          </div>
          <img src="../img/bentley.jpg" alt="">
          <button href="#" class="bouton-2">Nos tarifs</button>
        </section>

        <section class="container_voiture">
          <hr class="top-hr-voiture">
          <h1 class="voiture">Nos voitures</h1>
          <hr class="bottom-hr-voiture">

          <section class="cards">
              <div class="cat1">
                  <h2>Citadine</h2>
                  <img src="../img/rs3.jpg" alt="">
                  <a href="citadine.php"><button class="bouton_1">Y aller →</button></a>
              </div>

              <div class="cat2">
                  <h2>Familiale</h2>
                  <img src="../img/rs6.jpg" alt="">
                  <a href="familiale.php"><button class="bouton_2">Y aller →</button></a>
              </div>

              <div class="cat3">
                  <h2>Supercar</h2>
                  <img src="../img/lambo2.jpg" alt="">
                  <a href="supercar.php"><button class="bouton_3">Y aller →</button></a>
              </div>
          </section>
      </section>
  </body>

<?php
require_once 'layout/footer.php';
?>
