<?php
require_once 'Camion.php';
require_once 'Bicycle.php';
require_once 'Cars.php';

$kit = new Cars('green', 4, 'electric');
echo $kit->setHasParkBrake(true);

try {
    $kit->start();
}
catch (Exception $e){
    echo $message ='your cannot drive strat' . $e->getMessage();
    $kit->setHasParkBrake(false);
} finally {
    echo 'Ma voiture roule comme un Donut';
}




var_dump($kit);
