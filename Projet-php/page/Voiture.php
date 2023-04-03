<?php
require_once 'layout/head.php';
?>

<body>
    <?php
    require_once 'layout/navbar.php';
    ?>
    <section class="container_voiture">

        <h1>Nos voitures</h1>

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