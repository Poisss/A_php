<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Продажа овощей</title>
        <link rel="stylesheet" type="text/css" href="css.css">
    </head>
    <body>
        <?php
        $vtime=date("H");
        if($vtime>7 and $vtime<9){
            echo
            "<style>
            header{
                background:rgb(49,60,140);
            }
            footer{
                background:rgb(49,60,140);
            }
            </style> ";
        }
        else{
            "<style>
            header{
                background:rgb(29, 33, 65);
            }
            footer{
                background:rgb(29, 33, 65);
            }
            </style> ";
        }
        ?>
        <div class="container">
            <header>
                <h1>
                    Time
                </h1>
            </header>
            <main>
                <div class="main">
                    <img class="img" 
                    <?php 
                    $vtime=date("H"); 
                    if($vtime>7 and $vtime<9)
                    { echo" src='index.jpg'";}
                     else{ echo" src='index2.jpg'";}    
                     ?>>
                </div>
            </main>
            <footer>
                <p>
                    Технологии HTML, CSS, JavaScript<br>Основы графического дизайна, 2022 год
                </p>
            </footer>
            
        </div>
    </body>
</html>