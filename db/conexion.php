<?php

define('DB_DRIVER', 'mysql');
define('DB_HOST', 'localhost');
define('DB_USER', 'rui');
define('DB_PWD', 'Goleador1382');
define('DB_DATABASE', 'ticesot');

try {
    $pdo = new PDO(DB_DRIVER.':host='.DB_HOST.';dbname='.DB_DATABASE, DB_USER, DB_PWD);
            
    if ($pdo) {
      
    } else {
        echo "Problemas na conexão!";
    }
} catch (PDOException $exc) {
    echo "Problemas na conexão!";
    echo $exc->getMessage();
}