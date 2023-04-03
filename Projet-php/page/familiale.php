<?php
require_once 'layout/head.php';
?>

<body>

    <?php
    require_once 'layout/navbar.php';
    ?>
    <section class="container_familiale">

        <h1>Familiale</h1>

        <div class="cards_familiale">
            <div class="card1">
                <h2>RS6 Full option 600cv</h2>
                <img src="../img/rs6_fam.jpg" alt="">
                <div class="txt_rs6">
                    <h4>700$/jour</h4>
                    <hr>
                    <h4>1200$/semaine</h4>
                    <hr>
                    <h4>2500$/mois</h4>
                </div>
                <a href="reservation.php"><button type="button" class="btn btn-primary" class="btn-A45S" name="A45S">Réserver</button></a>
            </div>

            <div class="card2">
                <h2>URUS Full option 650cv</h2>
                <img src="../img/urus.jpg" alt="">
                <div class="txt_a45s">
                    <h4>700$/jour</h4>
                    <hr>
                    <h4>1200$/semaine</h4>
                    <hr>
                    <h4>2500$/mois</h4>
                </div>
                <a href="reservation.php"><button type="button" class="btn btn-primary" class="btn-A45S" name="A45S">Réserver</button></a>
            </div>

            <div class="card3">
                <h2>RSQ8 Full option 600cv</h2>
                <img src="../img/rsq8.jpg" alt="">
                <div class="txt_m3">
                    <h4>700$/jour</h4>
                    <hr>
                    <h4>1200$/semaine</h4>
                    <hr>
                    <h4>2500$/mois</h4>
                </div>
                <a href="reservation.php"><button type="button" class="btn btn-primary" class="btn-A45S" name="A45S">Réserver</button></a>
            </div>
        </div>
    </section>
</body>

<?php
require_once 'layout/footer.php';
?>