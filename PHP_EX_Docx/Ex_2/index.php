<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
    <?php
        if(empty($_POST)){   
    ?>
        <h1>Интернет_пакет</h1>
        <P >Минуты:</P>
        <input type="number" min="0" max="2000" name="min" required>
        <P >Гигабайты:</P>
        <input type="number" min="1" max="50" name="giga" required>   
        <h2>Дополнительный фуекционал:</h2> 
        <P >SMS</P>
        <input type="checkbox"  name="sms" >  
        <h2>Приложения</h2> 
        <P >Telegram</P>
        <input type="checkbox"  name="col_draw" >
        <P >WhatsApp</P>
        <input type="checkbox"  name="col_draw" >  
        <P >Viber</P>
        <input type="checkbox"  name="col_draw" >  
        <P >Skipe</P>
        <input type="checkbox"  name="col_draw" >    
        <h2>Социальные сети</h2> 
        <P>VK</P>
        <input type="checkbox" name="col_draw" >  
        <P>OK</P>
        <input type="checkbox"  name="col_draw" > 
    <?php
        }else{

        }
    ?>
    </body>
</html>