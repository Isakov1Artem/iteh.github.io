<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?
    include('connect.php');
    sleep(1);
    if(isset($_GET['append'])){
      $id_car = $_GET['New_Car'];
      $Date_start_new = $_GET['D_St_N'];
      $Time_start_new = $_GET['T_St_N'];
      $Date_stop_new = $_GET['D_Sp_N'];
      $Time_stop_new = $_GET['T_Sp_N'];
      $Cost_new = $_GET['Cosst'];

      $apeend_new_rent = $dbh->prepare("INSERT INTO rent (FID_Car, Date_start, Time_start, Date_end, Time_end, Cost) VALUES (:FID_Car, :Date_start, :Time_start, :Date_end, :Time_end, :Cost)");
      if($apeend_new_rent -> execute(array(':FID_Car'=> $id_car,':Date_start'=> $Date_start_new,':Time_start'=> $Time_start_new,':Date_end'=> $Date_stop_new,':Time_end'=> $Time_stop_new, ':Cost'=> $Cost_new))){
        echo "New record created successfully";}
         else {
           echo "Unable to create record";
              }
      }

    ?>

  </body>
</html>
