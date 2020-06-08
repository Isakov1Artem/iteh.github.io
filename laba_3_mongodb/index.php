<?php
require 'db_connection.php'
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Лаба 3</title>
    <script src="ajax.js"></script>
  </head>
  <body>

               <h3>Выберите дату для получения данных о доходе с проката:</h3>
                <select name="date_start" id="date_start">
                <?
                $cursor = $collection->document_rent->distinct('date_start');
                 foreach ($cursor as $date ) {

                   echo "<option value=".$date.">".$date."</option>";
                 }

                 ?>
               </select>
                 <input onclick="Result_1()" type="button" value="Выполнить"  />
             <br/>
              <ul id="res1"></ul>

               <h3>Выберите пробег автомобиля:</h3>
               <select name="Cars" id="Cars">
                 <?
                 $cursor = $collection->document_cars->distinct('mileage');
                  foreach ($cursor as $mileages ) {
                  echo "<option value=".$mileages.">".$mileages."</option>";
                  }
                 ?>
               </select>
                 <input onclick="Result_2()" type="button" value="Выполнить" />
             <br/>
             <ol id="res2"></ol>

             <h3>Марки автомобилей:</h3>

               <input onclick="Result_3()" type="button" value="Вывести" />
           <br/>
           <ol id="res3"></ol>



  </body></html>
