<?php
require_once 'layout/head.php';
require_once __DIR__ . '/data/reservation_process.php';
?>

<body>
    <?php
    require_once 'layout/navbar.php';
    ?>
    <section class="container_sprcar">

        <h1>Supercar</h1>
        <div class="row row-cols-3">
            <?php
            $stmt = $pdo->query("SELECT * FROM voiture WHERE categorie = 7");
            while ($row = $stmt->fetch()) { ?>
                <div class="d-flex text-center flex-column g-4 p-5">
                    <h3><?php echo $row['nom'] . " " . $row['puissance'] ?></h3>
                    <img class="img-fluid" src="../img/<?php echo $row['image'] ?>" alt="">
                    <div class="bg-secondary h-100">
                        <h4><?php echo $row['prix'] ?>$/jour</h4>
                        <hr>
                        <h4><?php echo ($row['prix'] * 2) - 200 ?>$/semaine</h4>
                        <hr>
                        <h4><?php echo ($row['prix'] * 4) - 1000 ?>$/mois</h4>
                    </div>
                    <a href="reservation.php?nomcar=<?php echo $row['nom']; ?>"><button type="button" class="btn btn-primary" class="btn-ferrari" name="ferrari">Réserver</button></a>
                </div>
            <?php
            }
            ?>

        </div>
    </section>

</body>

<?php
require_once 'layout/footer.php';
?>