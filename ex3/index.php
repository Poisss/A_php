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
        $up='php';
        echo strtoupper($up);
        ?>
        <h1>Задание 2</h1>
        <?php
        $str='Аверин Артём Александрович';
        echo "$str <br>";
        echo mb_substr($str,7,6).mb_substr($str,0,6);
        ?>

        <h1>Задание 3</h1>
        <?php

        $str='Привет мир';
        echo substr_count($str,'и');
//        $ch=0;
//        $arr=str_split($str);
//        $pos='и';
//        for($i=0;$i++<mb_strlen($str);){
//            if($arr[$i]==$pos){
//                $ch+=1;
//            }
//        }
//        echo $ch
        ?>
        <h1>Задание 4</h1>
        <?php
        $str='HTML CSS PHP';
            echo mb_substr($str,0,4);
            echo mb_substr($str,5,3);
            echo mb_substr($str,9,3);
        ?>
        <h1>Задание 5</h1>
        <?php
        $str='HTML .png';
        $pro='.png';
        $pr=substr($str,-4);
        if($pr==$pro){
            echo 'да';
        }
        else{
            echo 'нет';
        }
        ?>
    </body>
</html>
