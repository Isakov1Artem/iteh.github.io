<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <table border = "1">
      <tr>
        <th>Cost</th>
      </tr>
    <?
    include('connect.php');
    $Date_start = $_GET['Costs'];
    echo "Дата:".$Date_start;
  if(isset($_GET['myActionName'])){
    $cost =$dbh->prepare("SELECT Cost FROM rent WHERE Date_start = :Date_start");
    $cost-> execute(array(':Date_start' => $Date_start));
    $timetable = $cost->fetchAll(PDO::FETCH_NUM);
    foreach ($timetable as $rocc) {
      $cost = $rocc[0];
      print "<tr> <td>$cost</td> </tr>";
    }

    #foreach($cost as $ros){
    #echo "Стоимость:";
    #print $ros['Cost']."\n";
    #echo "<br/>";
  }
    ?>

    </table>

  </body>
</html>
