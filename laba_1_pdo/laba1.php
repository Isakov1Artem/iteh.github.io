 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Лаба 1</title>
   </head>
   <body>
     <?php
                include('connect.php');
                ?>
                <form action="laba_1_result.php" target="_blank" method="GET">
                <h3>Выберите дату для получения данных о доходе с проката:</h3>
                <select name="Costs">
                  <?
                  $cos = "SELECT Date_start FROM rent";
                  foreach ($dbh->query($cos) as $row ) {
                    print "<option value='$row[Date_start]'>$row[Date_start]</option>";
                  }
                  ?>
                  <input name="myActionName" type="submit" value="Выполнить"  />
                </form>
              <br/>

                <h3>Выберите производителя чтобы получить список его машин:</h3>
                <form action="laba_1_result_2.php" target="_blank" method="GET">
                <select name="Cars">
                  <?
                  $ven = "SELECT ID_Vendors FROM vendors";
                  foreach ($dbh->query($ven) as $rol ) {
                    print "<option value='$rol[ID_Vendors]'>$rol[ID_Vendors]</option>";
                  }
                  ?>
                  <input name="SelectVend" type="submit" value="Выполнить" />
                </form>
              <br/>

                <h3>Выберите дату для просмотра свободных машин:</h3>

                <form action="laba_1_result_3.php" target="_blank" method="GET">
                <select name="Free_Cars">
                  <?
                  $free = "SELECT Date_start FROM rent";
                  foreach ($dbh->query($free) as $row ) {
                    print "<option value='$row[Date_start]'>$row[Date_start]</option>";
                  }
                  ?>
                  <input name="Free_Car" type="submit" value="Выполнить" />
                </form>
              <br/>

          <form action="laba_1_result_4.php" target="_blank" method="get">
            <h3>Добваление информации об аренде выбраного автомобиля:</h3>
            <h4>Выбрать автомобиль:
            <select name="New_Car">
            <?
            $car = "SELECT ID_Cars FROM cars";
            foreach ($dbh->query($car) as $roc ) {
              print "<option value='$roc[ID_Cars]'>$roc[ID_Cars]</option>";
            }
            ?>
          </select></h4>
          <h4>День начала аренды:
          <input name="D_St_N" type="text" placeholder="YYYY-MM-DD" /></h4>
          <h4>Время начала аренды:
          <input name="T_St_N" type="text" placeholder="hh:mm:ss" /></h4>
          <h4>День конца аренды:
          <input name="D_Sp_N" type="text" placeholder="YYYY-MM-DD" /></h4>
          <h4>Время окончания аренды:
          <input name="T_Sp_N" type="text" placeholder="hh:mm:ss" /></h4>
          <h4>Стоимость аренды:
          <input name="Cosst" type="text" placeholder="10.00" /></h4>
          <input name="append" type="submit" value="Выполнить" />

          </form>


          <form action="laba_1_result_5.php" target="_blank" method="get">
            <h3>Изменение пробега в выбраном автомобиле:</h3>
            <h4>Выбрать автомобиль:
            <select name="Car_Rase">
            <?
            $car_rase = "SELECT ID_Cars FROM cars";
            foreach ($dbh->query($car_rase) as $ror ) {
              print "<option value='$ror[ID_Cars]'>$ror[ID_Cars]</option>";
            }
            ?>
          </select></h4>
          <h4>Введите новые данные о пробеге:
          <input name="Car_Rase_new" type="text" placeholder="100.00" /></h4>
          <input name="update_rase_new" type="submit" value="Выполнить" />
        </from>

   </body></html>
