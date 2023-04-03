<?php

try{
    $pdo = new PDO('mysql:host=host.docker.internal;port=3306;dbname=cardeluxe;charset=utf8mb4', 'root', '');
}catch(Exception $e)
{
    die('erreur' . $e->getMessage());
}



