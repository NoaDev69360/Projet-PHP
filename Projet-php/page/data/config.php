<?php

try{
    $pdo = new PDO('mysql:host=host.internal.docker;port=3306;dbname=cardeluxe;charset=utf8mb4', 'root', 'root');
}catch(Exception $e)
{
    die('erreur' . $e->getMessage());
}



