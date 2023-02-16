<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>Задание 1</h1>
        <?php
        $ar=array();
        for ($i=0;$i++<10;){
            $ar[$i]=random_int(0,100);
            echo $ar[$i].'<br>';
        }    
        function sredArif($a){
            $kol=0;
            for ($i=0;$i++<count($a);){
                $kol+=$a[$i];                
            }
            $it=$kol/count($a);
            echo "Среднее равно ".$it;
        }
        $dd='sredArif';
        $dd($ar);
        ?>
        <h1>Задание 2</h1>
        <?php
        $strok='Привет привет пока';
        echo $strok."<br>";
        function kolSlov($a){
            $dlina=explode(separator:' ',string: $a);
            echo count($dlina);
        }
        $da='kolSlov';
        $da($strok);
        ?>
        <h1>Задание 3</h1>
        <?php
        $kolfibn=10;
        function fibanachi($a){           
            if($a<0){
                echo "не поддерживает отрицательныечисла";
            }
            elseif($a==0){
                echo "0 равно 0";
            }
            elseif($a==1){
                echo "0 равно 0 <br> 1 равно 1";
            }
            else{
                echo "0 равно 0 <br> 1 равно 1<br>";
                $element1=0;
                $element2=1;
                $per1=0;
                for($i=0;$i++<$a-2;){                   
                    $per1=$element2;
                    $element2=$element1+$element2;
                    $element1=$per1;
                    echo ($i+2)." равно ".$element2."<br>";
                };
            }    
        }
        $ds='fibanachi';
        $ds($kolfibn);
        ?>
        <h1>Задание 4</h1>
        <?php
        $tek = time();
        $pro = strtotime("2003-01-01");
        $a = $tek - $pro; 
        
        echo floor($a/(60 * 60 * 24));
        ?>
    </body>
</html>