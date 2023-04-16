<?php
require_once __DIR__ . '/data/DBinitializer.php';
require_once __DIR__ . '/layout/head.php';
require_once __DIR__ . '/layout/navbar.php';

?>

<h1 class="text-center mt-5">Resevation</h1>
<?php
if (isset($_GET['nomcar'])) {
    $nomCar = $_GET['nomcar'];

    $stmt = $pdo->prepare("SELECT * FROM voiture WHERE nom=:nomCar");
    $stmt->execute([
        'nomCar' => $nomCar,
    ]);

    $result = $stmt->fetch();
?>

    <section class="container">
        <div class="bloc_reservation">
            <div class="row mt-5">
                <div class="col-lg-6">
                    <img class="h-auto w-100" src="../img/<?php echo $result['image']; ?>" alt="">
                </div>

                <div class="col-lg-6">
                    <h4 class="mt-3">Information sur le <?php echo $result['nom']; ?></h4>
                    <input type="text" class="mt-2" name="" placeholder="Puissance : <?php echo $result['puissance']; ?>">
                    <input type="text" class="" name="" placeholder="Prix : <?php echo $result['prix']; ?>">
                    <input type="text" class="mt-2" name="" placeholder="Kilométrage : <?php echo $result['kilometrage']; ?>">
                    <input type="text" class="" name="" placeholder="Energie : <?php echo $result['energie']; ?>">
                    <input type="text" class="mt-2" name="" placeholder="Couleur : <?php echo $result['couleur']; ?>">

                    <form method="post">
                    <div class="col-lg-6">
                        <h4>Début de départ</h4>
                        <input type="date" name="debut" id="">
                        <h4>Début de fin</h4>
                        <input type="date" name="fin" id="">
                        <input type="hidden" name="carId" value="<?php echo $result['id']; ?>">
                        <button type="submit" class="btn btn-primary">Confirmer</button>
                    </div>
                </form>
                
                </div>

            </div>
        </div>
    </section>

<?php if(!empty($_POST) && isset($_POST['carId']) && isset($_POST['debut']) && isset($_POST['fin'])){
    header('Location: confirm_reservation.php' . '?carId=' . $_POST['carId'] . '&debut='. $_POST['debut'] . '&fin='. $_POST['fin']);
}
} ?>















<!-- <?php require_once __DIR__ . '/layout/footer.php'; ?> -->