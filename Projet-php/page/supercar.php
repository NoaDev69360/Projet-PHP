<?php
require_once 'layout/head.php';
?>

<body>
    <?php
    require_once 'layout/navbar.php';
    ?>
    <section class="container_sprcar">

        <h1>Supercar</h1>

        <div class="cards_sprcar">
            <div class="card1">
                <h2>ferrari Full option 963cv</h2>
                <img src="../img/ferrari_supercar.jpg" alt="">
                <div class="txt_ferrari">
                    <h4>700$/jour</h4>
                    <hr>
                    <h4>1200$/semaine</h4>
                    <hr>
                    <h4>2500$/mois</h4>
                </div>
                <a href="reservation.php"><button type="button" class="btn btn-primary" class="btn-ferrari" name="ferrari">Réserver</button></a>
            </div>

            <div class="card2">
                <h2>R8 Full option 525cv</h2>
                <img src="../img/r8.jpg" alt="">
                <div class="txt_r8">
                    <h4>700$/jour</h4>
                    <hr>
                    <h4>1200$/semaine</h4>
                    <hr>
                    <h4>2500$/mois</h4>
                </div>
                <a href="reservation.php"><button type="button" class="btn btn-primary" class="btn-r8" name="r8">Réserver</button></a>
            </div>

            <div class="card3">
                <h2>Lamborghini 700cv</h2>
                <img src="../img/lamborghini.jpg" alt="">
                <div class="txt_lamborghini">
                    <h4>700$/jour</h4>
                    <hr>
                    <h4>1200$/semaine</h4>
                    <hr>
                    <h4>2500$/mois</h4>
                </div>
                <a href="reservation.php"><button type="button" class="btn btn-primary" class="btn-lamborghini" name="lamborghini">Réserver</button></a>
            </div>
        </div>
    </section>

</body>

<?php
require_once 'layout/footer.php';
?>