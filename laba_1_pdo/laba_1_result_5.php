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
    if(isset($_GET['update_rase_new'])){
      $id_car_rase =$_GET['Car_Rase'];
      $update_rase = $_GET['Car_Rase_new'];
      $update_car_rase = $dbh->prepare("UPDATE cars SET Race =:update_rase WHERE ID_Cars =:id_car_rase");
      if($update_car_rase -> execute(array(':update_rase'=> $update_rase,':id_car_rase'=> $id_car_rase))){
        echo "Update rase successfully";
      }else{
        echo "ERROR";
      }
    }

    ?>

  </body>
</html>
