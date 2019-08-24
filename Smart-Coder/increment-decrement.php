<doctype html>
    <html lang="en">
        <head>
            <meta charset="utf-8">
            <title>increment-decrement-opratoer</title>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        </head>
        <body>
            <?php 
                $a = 5;
                $sub = $a++;

                echo $sub;
                // End pre increment example
                echo "<br>";

                $b = 5;
                $total = ++$b;

                echo $total;
                // End post increment example
            ?>
        </body>
    </html>