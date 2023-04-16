<?php
require_once __DIR__ . '/data/reservation_process.php';
require_once __DIR__ . '/layout/head.php';
require_once __DIR__ . '/layout/navbar.php';

if(!empty($_GET) && isset($_GET['carId']) && isset($_GET['debut']) && isset($_GET['fin']))
{
    $stmt = $pdo->prepare("SELECT * FROM voiture WHERE id=:carId");
    $stmt->execute([
        'carId' => $_GET['carId'],
    ]);

    $result = $stmt->fetch();
    $debut = new DateTimeImmutable($_GET['debut']);
    $fin = new DateTimeImmutable($_GET['fin']);
    $interval = $debut->diff($fin);
    $prixtotale = $interval->format('%R%a') * $result['prix'];

    ?>
        <div class="row">
            <div class="col-lg-6">
                <img class="h-auto w-100" src="../img/<?php echo $result['image']; ?>" alt="">
                <h4 class="mt-3">Information sur le <?php echo $result['nom']; ?></h4>
                <input type="text" class="mt-2" name="" placeholder="Puissance : <?php echo $result['puissance']; ?>">
                <input type="text" class="" name="" placeholder="Prix : <?php echo $result['prix']; ?>">
                <input type="text" class="mt-2" name="" placeholder="Kilométrage : <?php echo $result['kilometrage']; ?>">
                <input type="text" class="" name="" placeholder="Energie : <?php echo $result['energie']; ?>">
                <input type="text" class="mt-2" name="" placeholder="Couleur : <?php echo $result['couleur']; ?>">
            </div>
            <div class="col-lg-6">
                <p>Confirmer vous la reservation du vehicule pour un totale de <?php echo $prixtotale ?> $</p>
                <form method="post">
                    <input type="hidden" name="confirmation">
                    <button type="submit" class="btn btn-primary">Confirmer</button>
                </form>
            </div>
        </div>
        
<?php    
}



