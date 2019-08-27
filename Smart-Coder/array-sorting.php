<doctype html>
    <html lang="en">
        <head>
            <meta charset="utf-8">
            <title>array-associative</title>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        </head>
        <body>
           <?php 
                $a = array('Tiger', 'Lion', 'Elephant', 'Snake', 'Monkey', 'Bear', 'Cat', 'Dog', 'Hen');
                $b = array('Tiger', 'Lion', 'Elephant', 'Snake', 'Monkey', 'Bear', 'Cat', 'Dog', 'Hen');
                $c = array('Tiger', 'Lion', 'Elephant', 'Snake', 'Monkey', 'Bear', 'Cat', 'Dog', 'Hen');
                $d = array('Tiger', 'Lion', 'Elephant', 'Snake', 'Monkey', 'Bear', 'Cat', 'Dog', 'Hen');
                $e = array('Tiger', 'Lion', 'Elephant', 'Snake', 'Monkey', 'Bear', 'Cat', 'Dog', 'Hen');
                $f = array('Tiger', 'Lion', 'Elephant', 'Snake', 'Monkey', 'Bear', 'Cat', 'Dog', 'Hen');
                
                sort($a);
                rsort($b);

                asort($c);
                arsort($d);

                ksort($e);
                krsort($f);
                
                print_r($a);
                echo "<br>";
                echo "<br>";
                print_r($b);
                echo "<br>";
                echo "<br>";
                print_r($c);
                echo "<br>";
                echo "<br>";
                print_r($d);
                echo "<br>";
                echo "<br>";
                print_r($e);
                echo "<br>";
                echo "<br>";
                print_r($f);
                
           ?>
        </body>
    </html>