<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <table border = "1">
      <tr>
        <th>Name Cars</th>
      </tr>
    <?
    include('connect.php');
    sleep(1);
    $FID_Vendors = $_GET['Cars'];
    echo "Производитель:".$FID_Vendors;
    echo "<br/>";
    if(isset($_GET['SelectVend'])){
    $vend = $dbh->prepare ("SELECT cars.Name FROM cars INNER JOIN vendors ON cars.FID_vendors=vendors.ID_Vendors WHERE FID_Vendors=:FID_Vendors ");
    $vend -> execute(array(':FID_Vendors' => $FID_Vendors));
    $timetable2 = $vend->fetchAll(PDO::FETCH_NUM);
    foreach ($timetable2 as $rocc) {
      $Name = $rocc[0];
      print "<tr> <td>$Name</td> </tr>";
    }

  }
    ?>
  </table>
  </body>
</html>
