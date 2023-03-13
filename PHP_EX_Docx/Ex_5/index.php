<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <style>
            .dd{
                display: grid;
                grid-template-columns: 300px 260px;
            }
            .dd div{
                background: beige;
                border: 1px solid black;
                padding: 20px;
            }
            p{
                display: block;
            }
        </style>
        <form action="" method="post">
            <div class="dd">
                <div>
                    <input type="checkbox" name="type[]" value="1">Время(t)
                </div>
                <div>
                    <p>
                        часы<br>
                        <input type="number" name="hour" min="0" >
                    </p>
                    <p>
                        минуты<br>
                        <input type="number" name="min" min="0" max="59">
                    </p>
                    <p>
                        секунды<br>
                        <input type="number" name="sec" min="0" max="59">
                    </p>
                </div>

                <div>
                    <input type="checkbox" name="type[]" value="2">Расстояние(s)
                </div>
                <div>
                <input type="number" name="distance" min="1" >
                    <select name="dtype">
                        <option value="1">километр</option>
                        <option value="2">метр</option>
                    </select>
                </div>

                <div>
                    <input type="checkbox" name="type[]" value="3">Скорость(v)
                </div>
                <div>
                    <input type="number" name="speed" min="1" >
                    <select name="stype">
                        <option value="1">километр в час(км\ч)</option>
                        <option value="2">метр в минуту(м\)мин</option>
                    </select>
                </div>
            </div>
            <input type="submit" value="Отправить">
        </form>
        <?php
            if(!empty($_POST)){
                if(count($_POST['type'])==2){
                    if($_POST['type'][0]==1){

                    }
                }else{
                    echo'Выберити только два параметра';
                }
            }
        ?>
    </body>
</html>