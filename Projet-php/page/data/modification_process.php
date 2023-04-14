<?php
if (!empty($_POST) && isset($_POST['account_nom']) && isset($_POST['account_prenom']) && isset($_POST['account_sexe']) && isset($_POST['account_email']) && isset($_POST['account_adresse']) && isset($_POST['account_permis']) && isset($_POST['account_tel']) && isset($_POST['account_date'])) {
    require_once __DIR__ . '/DBinitializer.php';

    // Récupérer les valeurs du formulaire
    $email_c = $_POST['account_email'];
    $nom_c = $_POST['account_nom'];
    $prenom_c = $_POST['account_prenom'];
    $sexe_c = $_POST['account_sexe'];
    $adresse_c = $_POST['account_adresse'];
    $numero_permis_c = $_POST['account_permis'];
    $numero_telephone_c = $_POST['account_tel'];
    $date_naissance_c = $_POST['account_date'];

    if (!empty($_POST)) {
        require_once 'config.php';
            // Vérifier si un client avec ces informations existe déjà
        $stmt = $pdo->prepare('SELECT id_c FROM client WHERE email_c AND prenom_c AND sexe_c AND adresse_c AND numero_permis_c AND numero_telephone_c AND date_naissance_c');
        $stmt->execute([$email_c, $prenom_c, $sexe_c, $adresse_c, $numero_permis_c, $numero_telephone_c, $date_naissance_c]);
        $client = $stmt->fetch();
        // Si un client avec ces informations existe déjà, mettre à jour ses informations
        $stmt = $pdo->prepare('UPDATE client SET email_c = ?, nom_c = ?, prenom_c = ?, sexe_c = ?, adresse_c = ?, numero_permis_c = ?, numero_telephone_c = ?, date_naissance_c = ? WHERE id_c = ?');
        $stmt->execute([$email_c, $nom_c, $prenom_c, $sexe_c, $adresse_c, $numero_permis_c, $numero_telephone_c, $date_naissance_c, $client['id_c']]);
        $modif = $stmt->fetch();

        // Mettre à jour les variables de session si l'utilisateur est connecté
        if (isset($_SESSION['id_c']) && $_SESSION['id_c'] == $client['id_c']) {
            $_SESSION['account_email'] = $email_c;
            $_SESSION['account_nom'] = $nom_c;
            $_SESSION['account_prenom'] = $prenom_c;
            $_SESSION['account_sexe'] = $sexe_c;
            $_SESSION['account_adresse'] = $adresse_c;
            $_SESSION['account_permis'] = $numero_permis_c;
        }
    }
}
?>

