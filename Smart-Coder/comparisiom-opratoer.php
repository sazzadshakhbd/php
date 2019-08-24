<doctype html>
    <html lang="en">
        <head>
            <meta charset="utf-8">
            <title>comparisiom-opratoer</title>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        </head>
        <body>
            <?php 
                $a = 5;
                var_dump($a == 5);
                
                echo "<br>";
               
                $b = 6;
                var_dump($b === "6");

                echo "<br>";

                $c = 7;
                var_dump($c !=   7);

                echo "<br>";

                $c = 8;
                var_dump($c !==  8);

                echo "<br>";

                $d = 9;
                var_dump($d <>  8);

                echo "<br>";

                $x = 7;
                $y = 6;

                var_dump($x < $y);

            ?>
        </body>
    </html>