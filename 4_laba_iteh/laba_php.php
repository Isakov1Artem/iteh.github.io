<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP</title>
  </head>
  <body>
    <p>Создаем первый массив:</p>
    <?php
    define('LENGTH', 20);
    $array = array();
    for ($i = 0; $i < LENGTH; $i ++) {
    $array[] = rand(0, 25);
    }
      print_r($array);
     ?>
     <p>Создаем второй массив:</p>
     <?php
     define('LENGTHT', 20);
     $array2 = array();
     for ($i = 0; $i < LENGTHT; $i ++) {
     $array2[] = rand(0, 25);
     }
       print_r($array2);
       ?>

       <p>Убирает все дублирущие элементы каждого массива</p>
       <?php
       $result = array_unique($array);
       $result2 = array_unique($array2);
       echo "Первый массив:";
       print_r($result);
       echo '<br/>';
       echo '<br/>';
       echo "Второй массив:";
       print_r($result2);
        ?>

        <p>Выводим количество дублирущих элементов двух массивов:</p>
        <?php
        $var2_1 = array_diff_assoc($array, $result);
        $var2_2 = array_diff_assoc($array2, $result2);

        echo "Первый массив:";
        print_r(count($var2_1));
        echo '<br/>';
        echo '<br/>';
        echo "Второй массив:";
        print_r(count($var2_2));
        ?>

        <p>Сливаем два массива в один, убирая все дублирующие значения</p>
        <?php
        $var3 = array_merge($array, $array2);
        print_r(array_unique($var3));


         ?>
         <p>Меняем местами значения массива (первый элемент массива становится последним, предпоследний - вторым, ..., последний первым). Использовать foreach</p>
         <?php
         $var = count($var3)-1;
         $array3 = array();
         foreach($var3 as $key=> $val) {
            $array3[$key] = $var3[$var] ;
            $var--;
          }

          print_r($array3);
        ?>
  </body>
</html>
