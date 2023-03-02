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
            .container{
                width: 800px;
                margin: 0 auto;
                border: 1px solid black;
                padding: 20px;
            }
            .container:nth-child(),.container:not(:last-child){
                margin-bottom: 10px;
            }
            input{
                min-width: 100px;
            }
        </style>
        <div class="container">
            <h1>Bank</h1>
            <?php
                if(empty($_POST)){  
            ?>

            <form action="" method="post">
                    <label for="">Money:</label>
                    <input type="number" min="1" name="money">
                    <label for="">Time:</label>
                    <input type="number" min="1">
            </form>

            <?php
                }
            ?>
        </div>
    </body>
</html>