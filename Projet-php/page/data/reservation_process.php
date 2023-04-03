<?php

$dbConfig = parse_ini_file('db.ini');

[
    'DB_HOST' => $host,
    'DB_PORT' => $port,
    'DB_NAME' => $dbName,
    'DB_CHARSET' => $dbCharset ,
    'DB_USER' => $user,
    'DB_PASSWORD' => $password
] = $dbConfig;

$dsn = "mysql:host=$host;port=$port;dbname=$dbName;charset=$dbCharset";
$options = [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];

try {
    $pdo = new PDO($dsn, $user, $password, $options);
} catch (PDOException $e) {
    exit('Une erreur est survenue lors de la connexion à la base de données');
}

$nomCar = 'nom';
$puissanceCar = 'puissance';
$prixCar = 'prix';
$kilometrageCar = 'kilometrage';
$energieCar = 'energie';
$couleurCar = 'couleur';

$stmt = $pdo->prepare("SELECT * FROM voiture WHERE nom=:nomCar AND puissance=:puissanceCar AND prix=:prixCar AND kilometrage=:kilometrageCar AND energie=:energieCar AND couleur=:couleurCar");
$stmt->execute([
    'nomCar' => $nomCar,
    'puissanceCar' => $puissanceCar,
    'prixCar' => $prixCar,
    'kilometrageCar' => $kilometrageCar,
    'energieCar' => $energieCar,
    'couleurCar' => $couleurCar
]);
