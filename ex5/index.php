<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <h1>Задание 1</h1>
        <?php
        $sr=0;
        $kol=0;
        $ar=[
            "Физика"=>[],
            "Математика"=>[],
            "Химия"=>[],
            "Информатика"=>[]
        ];
        for ($i=0;$i++<4;) {

            for ($j=0;$j++<10;){
                switch ($i){
                    case 0:
                    $p = '"Физика"';
                    break;
                    case 1:
                    $p = '"Математика"';
                    break;
                    case 2:
                    $p = '"Химия"';
                    break;
                    case 3:
                    $p = '"Информатика"';
                    break;
                }
                $ar[$p][$j]=random_int(2, 5);
                echo $ar[$p][$j].' ' ;
                $kol+=$ar[$p][$j];

            }
            $sr=$kol/10;
            echo '<br>'."Сумма=$kol;".'<br>'."Среднее=$sr;".'<br><br>';
            $sr=0;
            $kol=0;
        }

        ?>
        <?php

        ?>
        <h1>Задание 2</h1>
<!--        --><?php
//
//        $ar=[];
//        for($i=0;$i++<4;){
//            $ar[$i]=[zap($i)];
//            for ($j=0;$j++<12;){
//                $ar[$i][zap($i)]=["Месяц"=>prov($j),"Температура"=>random_int(-15, 35)];
//            }
//        }
//        function zap($i)
//        {
//            switch ($i) {
//                case 0:
//                    $i = '"Куба"';
//                    break;
//                case 1:
//                    $i = '"Тримидад"';
//                    break;
//                case 2:
//                    $i = '"Ямайка"';
//                    break;
//                case 3:
//                    $i = '"Гаити"';
//                    break;
//
//            }
//            return $i;
//        }
//        function prov($i){
//            switch ($i){
//                case 0:
//                    $i="Январь";
//                    break;
//                case 1:
//                    $i="Февраль";
//                    break;
//                case 2:
//                    $i="Март";
//                    break;
//                case 3:
//                    $i="Апрель";
//                    break;
//                case 4:
//                    $i="Май";
//                    break;
//                case 5:
//                    $i="Июнь";
//                    break;
//                case 6:
//                    $i="Июль";
//                    break;
//                case 7:
//                    $i="Август";
//                    break;
//                case 8:
//                    $i="Сентябрь";
//                    break;
//                case 9:
//                    $i="Октябрь";
//                    break;
//                case 10:
//                    $i="Ноябрь";
//                    break;
//                case 11:
//                    $i="Декабрь";
//                    break;
//            }
//            return $i;
//        }
////        print $ar["Куба"];
//        ?>
        <h1>Задание 3</h1>
        <?php
        $kol=0;
        $pr=0;
        $ar=array();
        for ($i=0;$i++<5;){
            $ar[$i] =[];
            for ($j=0;$j++<6;){
                $ar[$i][$j]=mt_rand(0, 9);
                echo $ar[$i][$j].' ' ;
            }
            echo "<br>";
        }
        for ($i=0;$i++<6;) {
            for ($j=0;$j++<5;){
                if ($i%2==0){
                    if($pr<$ar[$j][$i]){
                        $pr=$ar[$j][$i];
                    }
                }
            }
            $kol*=$pr;
            $pr=0;
        }
        echo "<br>Сумма =$kol"
        ?>
        <h1>Задание 4</h1>
        <?php
        $temp_rand=[
            "январь"=>0,
            "февраль"=>0,
            "март"=>0,
            "апрлель"=>0,
            "май"=>0,
            "июнь"=>0,
            "июль"=>0,
            "август"=>0,
            "сентябрь"=>0,
            "октябрь"=>0,
            "ноябрь"=>0,
            "декабрь"=>0,
        ];
        foreach ($temp_rand as $m=>&$key){
            $key=mt_rand(20,40);
            echo "$m = $key <br>";
        };
        $kol=$temp_rand["март"]+$temp_rand["июнь"]+$temp_rand["сентябрь"]+$temp_rand["декабрь"];
        echo "Сумма =$kol"
        ?>
        <h1>Задание 5</h1>
        <?php
//        $arr=array();
//        $arr2=array();
//        $sum=0;
//        for ($i=0;$i++<4;) {
//            $arr[$i] =[];
//            for ($j=0;$j++<8;){
//                $arr[$i][$j]=mt_rand(10, 35);
//                echo $arr[$i][$j].' ' ;
//                $sum+=$arr[$i][$j];
//            }
//            $arr2[$i]=$sum;
//            echo "<br>";
//            $sum=0;
//        }
//        for ($i=0;$i++<4;){
//            echo "Общее число ".$i ." курса=".$arr2[$i]."<br>";
//        }
        $ar1=[
            "Группа 1"=>0,
            "Группа 2"=>0,
            "Группа 3"=>0,
            "Группа 4"=>0,
            "Группа 5"=>0,
            "Группа 6"=>0,
            "Группа 7"=>0,
            "Группа 8"=>0,
        ];
        $ar2= [
            "Курс 1"=> $ar1,
            "Курс 2"=> $ar1,
            "Курс 3"=> $ar1,
            "Курс 4"=> $ar1
        ];
        $sum1=0;
        foreach ($ar2 as $Kyrs =>&$Grypa){
            foreach ($Grypa as $name =>&$kol){
                $kol=mt_rand(20,40);
                $sum1+=$kol;
                echo "$kol ";
            }
            echo "<br>";
            echo "Общее число $Kyrs = $sum1";
            echo "<br>";
            $sum1=0;
        }
        ?>
    </body>
</html>