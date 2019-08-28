<doctype html>
    <html lang="en">
        <head>
            <meta charset="utf-8">
            <title>trim</title>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        </head>
        <body>
           <?php 
                $a = "Animal";
                echo trim($a, "A");
                echo "<br>";
                var_dump($a);
                echo "<br>";
                $b = "Hello Elephant";
                echo ltrim($b, "Hello");
                echo "<br>";
                $c = "Md Sazzad ali shakh";
                echo rtrim($c, "shakh");

           ?>
        </body>
    </html>