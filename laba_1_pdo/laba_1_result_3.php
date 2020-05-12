<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <table border = "1">
      <tr>
        <th>Free Cars</th>
      </tr>
    <?
    include('connect.php');
    sleep(1);
    $Date_start1 = $_GET['Free_Cars'];
    echo "Дата:".$Date_start1;
    echo "<br/>";
  if(isset($_GET['Free_Car'])){
    $thid = $dbh->prepare ("SELECT Name FROM cars WHERE ID_Cars not in (select FID_Car from rent WHERE Date_start = :Date_start1)");
    $thid -> execute(array(':Date_start1' => $Date_start1));
    $timetable3 = $thid->fetchAll(PDO::FETCH_NUM);
    foreach ($timetable3 as $rocc) {
      $Name = $rocc[0];
      print "<tr> <td>$Name</td> </tr>";
    }}
    ?>
  </table>
  </body>
</html>
