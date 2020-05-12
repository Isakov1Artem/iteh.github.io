<?
    header("Content-Type: application/json");
    header("Cache-Control: no-cache, must-revalidate");
    include('connect.php');
    $Free_Cars = $_REQUEST['Free_Cars'];
    $thid = $dbh->prepare ("SELECT Name FROM cars WHERE ID_Cars not in (select FID_Car from rent WHERE Date_start = :Free_Cars)");
    $thid -> execute(array(':Free_Cars' => $Free_Cars));
    $timetable3 = $thid->fetchAll(PDO::FETCH_NUM);
    echo json_encode($timetable3);
