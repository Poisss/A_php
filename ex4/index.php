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
    $str='123456';
    if(mb_strlen($str)> 5){
        echo mb_substr($str,0,5).'...';
    }
    else{
        echo $str;
    }
    ?>
    <h1>Задание 2</h1>
    <?php
    $str='a-b-c-fdg';
    echo "$str<br>";
    $str=str_replace("a","1",$str);
    $str=str_replace("b","2",$str);
    echo str_replace("c","3",$str);
    ?>
    <h1>Задание 3</h1>
    <?php
    $str='a-b-c-fdgb';
    echo strpos($str,'b',-1);
    ?>
    <h1>Задание 4</h1>
    <?php
    $str=' html css php';
    $arr=explode(' ',$str);
    for ($i=0;$i++<3;){
        echo $arr[$i];
    }
    ?>
    <h1>Задание 5</h1>
    <?php
    $str1='10-02-2022';
    $str2=20-12-2022;
    $sum=0;
    $arr1=explode('-',$str1);
    $arr2=explode('-',$str2);
    if ($arr1[0]<$arr2[0]){
        $sum+=$arr2[0]-$arr1[0];
    }
    else{
        $sum+=$arr1[0]-$arr2[0];
    }
    if(mb_substr($str1,0,1)==0){
        if (mb_substr($str2,0,1)==0){
            $sum+=mb_substr($str2,1,1);
        }
    }

    else

    ?>
    </body>
</html>