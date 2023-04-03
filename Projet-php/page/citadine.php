<?php
require_once 'layout/head.php';
?>

<body>
    <?php
    require_once 'layout/navbar.php';
    ?>
    <section class="container_citadine">

        <h1>Citadine</h1>

        <div class="cards_citadine">
            <div class="card1">
                <h2>RS3 Full option 400cv</h2>
                <img src="../img/rs3_fam.jpg" alt="">
                <div class="txt_rs3">
                    <h4>700$/jour</h4>
                    <hr>
                    <h4>1200$/semaine</h4>
                    <hr>
                    <h4>2500$/mois</h4>
                </div>
                <a href="reservation.php"><button type="button" class="btn btn-primary" name="RS3">Réserver</button></a>
            </div>

            <div class="card2">
                <h2>A45s Full option 421cv</h2> 
                <img src="../img/A45s.jpg" alt="">
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
                <h2>BMW M3 Full option 425cv</h2>
                <img src="../img/m3.jpg" alt="">
                <div class="txt_m3">
                    <h4>700$/jour</h4>
                    <hr>
                    <h4>1200$/semaine</h4>
                    <hr>
                    <h4>2500$/mois</h4>
                </div>
                <a href="reservation.php"><button type="button" class="btn btn-primary" class="btn-BMWM3" name="BMWM3">Réserver</button></a>
            </div>
        </div>
    </section>

</body>

<?php
require_once 'layout/footer.php';
?>