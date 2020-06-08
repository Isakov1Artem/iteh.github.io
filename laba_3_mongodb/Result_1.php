<?

header('Content-Type:application/json');

require 'db_connection.php';

$date_start = $_GET["date_start"];
$cursor = $collection->document_rent->find(['date_start' => $date_start],["projection"=>["_id"=>0]])->toArray();

echo json_encode($cursor);
