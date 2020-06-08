<?

header('Content-Type:application/json');
header("Cache-Control: no-cache, must-revalidate");

require 'db_connection.php';

$mileage = $_GET["Cars"];

$cursor = $collection->document_cars->find(['mileage' => ['$lt'=>intval($mileage)]],["projection"=>["_id"=>0]])->toArray();

echo json_encode($cursor);
