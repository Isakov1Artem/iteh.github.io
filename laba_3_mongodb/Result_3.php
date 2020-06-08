<?php
 header('Content-Type:application/json');
    require "db_connection.php";
    $car_make = $collection->document_cars->distinct("car_make");

    echo json_encode($car_make);
?>
