<doctype html>
    <html lang="en">
        <head>
            <meta charset="utf-8">
            <title>ifelse</title>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        </head>
        <body>
            <?php 
                $number = 10;
                
                if($number == 9){
                    echo "<h1 class='text-success'>First condition true</h1>";
                }elseif($number == 10){
                    echo "<h1 class='text-success'>2nd condition true</h1>";
                }else {
                    echo "<h1 class='text-danger'>Condition False</h1>";
                }
            ?>
        </body>
    </html>