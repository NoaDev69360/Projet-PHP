<?php
if (!empty($_POST) && isset($_POST['email_c']) && isset($_POST['nom_c']) && isset($_POST['prenom_c']) && isset($_POST['sexe_c']) && isset($_POST['adresse_c']) && isset($_POST['numero_permis_c']) && isset($_POST['numero_telephone_c']) && isset($_POST['date_naissance_c']) && isset($_POST['password_c']) ) {

    $dbConfig = parse_ini_file('db.ini');

    [
        'DB_HOST' => $host,
        'DB_PORT' => $port,
        'DB_NAME' => $dbName,
        'DB_CHARSET' => $dbCharset,
        'DB_USER' => $user,
        'DB_PASSWORD' => $password
    ] = $dbConfig;

    $pdo = "mysql:host=$host;port=$port;dbname=$dbName;charset=$dbCharset";
    $options = [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];

    try {
        $pdo = new PDO($pdo, $user, $password, $options);
    } catch (PDOException $e) {
        echo "$host / $port / $dbName / $dbCharset / $user / $password";
        exit('Une erreur est survenue lors de la connexion à la base de données');
    }

    require_once 'config.php';
    $email_c = $_POST['email_c'];
    $nom_c = $_POST['nom_c'];
    $prenom_c = $_POST['prenom_c'];
    $sexe_c = $_POST['sexe_c'];
    $adresse_c = $_POST['adresse_c'];
    $numero_permis_c = $_POST['numero_permis_c'];
    $numero_telephone_c = $_POST['numero_telephone_c'];
    $date_naissance_c = $_POST['date_naissance_c'];
    $password_c = sha1($_POST['password_c']);


    if (!empty($_POST)) {
        $pseudo = htmlspecialchars($_POST['email_c']);
        $mdp = sha1('password_c');
        require_once 'config.php';
        $insertUser = $pdo->prepare('INSERT INTO client (email_c,nom_c,prenom_c,sexe_c,adresse_c,numero_permis_c,numero_telephone_c,date_naissance_c,password_c)VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)');
        $insertUser->execute(array($email_c, $nom_c, $prenom_c, $sexe_c, $adresse_c, $numero_permis_c, $numero_telephone_c, $date_naissance_c, $password_c));

        $recupUser = $pdo->prepare('SELECT * FROM client WHERE email_c = ? AND nom_c = ? AND prenom_c = ? AND sexe_c = ? AND adresse_c = ? AND numero_permis_c = ? AND numero_telephone_c = ? AND date_naissance_c = ? AND password_c = ?');
        $recupUser->execute(array($email_c, $nom_c, $prenom_c, $sexe_c, $adresse_c, $numero_permis_c, $numero_telephone_c, $date_naissance_c, $password_c));
        if ($recupUser->rowCount() > 0) {
            $_SESSION['email_c'] = $email_c;
            $_SESSION['nom_c'] = $nom_c;
            $_SESSION['sexe_c'] = $sexe_c;
            $_SESSION['adresse_c'] = $adresse_c;
            $_SESSION['numero_permis_c'] = $numero_permis_c;
            $_SESSION['date_naissance_c'] = $date_naissance_c;
            $_SESSION['numero_telephone_c'] = $numero_telephone_c;
            $_SESSION['password_c'] = $password_c;
            $_SESSION['id_c'] = $recupUser->fetch()['id_c'];
    }
} else {
?> <div class="error_inscription">
            <?php echo 'Veuillez remplir les champs'; ?>
        </div><?php
        }
} ?>