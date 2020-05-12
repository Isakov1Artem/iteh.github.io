<?
    include('connect.php');
    $Date_start = $_REQUEST['Date_start'];
    $cost =$dbh->prepare("SELECT Cost FROM rent WHERE Date_start = :Date_start");
    $cost-> execute(array(':Date_start' => $Date_start));
    $timetable = $cost->fetchAll(PDO::FETCH_NUM);
    foreach ($timetable as $rocc) {
      $cost = $rocc[0];
      print "<tr> <td>$cost</td> </tr>";
    }
