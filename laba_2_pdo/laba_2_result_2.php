<?header("Content-Type: text/xml");header("Cache-Control: no-cache, must-revalidate");echo"<?xml version='1.0' encoding='utf8' ?>";
    include('connect.php');
    $Cars = $_REQUEST['Cars'];
    $vend = $dbh->prepare ("SELECT cars.Name FROM cars INNER JOIN vendors ON cars.FID_vendors=vendors.ID_Vendors WHERE FID_Vendors=:Cars ");
    $vend -> execute(array(':Cars' => $Cars));
    $timetable2 = $vend->fetchAll(PDO::FETCH_NUM);
    echo"<root>";
    foreach ($timetable2 as $rocr) {
      $Name = $rocr[0];
      print "<row><NAME>$Name</NAME></row>";
    }
    echo "</root>";
