<!DOCTYPE html>
<html >
   <head>
     <meta charset="utf-8">
     <title>Лаба 2</title>
     <script>
       const ajax = new XMLHttpRequest();

       function result_1(){
         let Date_start = document.getElementById("Date_start").value;
         ajax.open("GET","laba_2_result.php?Date_start=" + Date_start);
         ajax.onreadystatechange = update1;
         ajax.send();
       }

       function result_2(){
         let Cars = document.getElementById("Cars").value;
         ajax.open("GET","laba_2_result_2.php?Cars=" + Cars);
         ajax.onreadystatechange = update2;
         ajax.send();
        }


        function result_3(){
          let Free_Cars = document.getElementById("Free_Cars").value;
          ajax.open("GET","laba_2_result_3.php?Free_Cars=" + Free_Cars);
          ajax.onreadystatechange = update3;
          ajax.send();
        }

       function update1(){
         if(ajax.readyState === 4){
           if(ajax.status === 200){
             document.getElementById("res1").innerHTML=ajax.responseText;
           }
         }
       }

       function update2(){
         if(ajax.readyState === 4){
           if(ajax.status === 200){
               var res = document.getElementById("res2");
               var result = "";
               let rows = ajax.responseXML.firstChild.children;
               for (var i = 0; i < rows.length; i++) {
                 result += "<tr>";
                 result += "<td>" + rows[i].children[0].firstChild.nodeValue + "</td>";
                 result += "</tr>";
               }
               res.innerHTML = result;
           }
         }
       }

       function update3(){
           if(ajax.status === 200){
             let res = JSON.parse(ajax.response);
             let result = "";
             for(let i in res){
               result +="<li>" + res[i] + "</li>";
             }
             document.getElementById("res3").innerHTML= result;
           }
       }

     </script>
   </head>
   <body>
        <?php
       include('connect.php');
       ?>
                <!--<form action="laba_1_result.php" target="_blank" method="GET">-->
                <h3>Выберите дату для получения данных о доходе с проката:</h3>
                <select name="Date_start" id="Date_start">
                  <?
                  $cos = "SELECT Date_start FROM rent";
                  foreach ($dbh->query($cos) as $row ) {
                    $date = $row[0];
                  print "<option value='$row[Date_start]'>$row[Date_start]</option>";
                  }
                  ?>
                </select>
                  <input type="button" value="Выполнить" onclick="result_1()" />
                <!--</form>-->
              <br/>
              <table border = "1">
                <thead>
                <tr>
                  <th>Cost</th>
                </tr>

              </thead>
              <tbody id="res1">

              </tbody>
              </table>

              <h3>Выберите производителя чтобы получить список его машин:</h3>
              <!--<form action="laba_1_result_2.php" target="_blank" method="GET">-->
              <select name="Cars" id = "Cars">
                <?
                $ven = "SELECT ID_Vendors FROM vendors";
                foreach ($dbh->query($ven) as $rol ) {
                  print "<option value='$rol[ID_Vendors]'>$rol[ID_Vendors]</option>";
                }
                ?>
              </select>
                <input type="button" value="Выполнить" onclick="result_2()" />
              <!--</form>-->
            <br/>
            <table border = "1">
              <thead>
              <tr>
                <th>Name Cars</th>
              </tr>
            </thead>
            <tbody id="res2"></tbody>
            </table>

              <h3>Выберите дату для просмотра свободных машин:</h3>

              <!--<form action="laba_1_result_3.php" target="_blank" method="GET">-->
              <select name="Free_Cars" id="Free_Cars">
                <?
                $free = "SELECT Date_start FROM rent";
                foreach ($dbh->query($free) as $row ) {
                  print "<option value='$row[Date_start]'>$row[Date_start]</option>";
                }
                ?>
              </select>
                <input onclick="result_3()" type="button" value="Выполнить" />
              <!--</form>-->
              <ol id="res3"></ol>
            <br/>

</body></html>
