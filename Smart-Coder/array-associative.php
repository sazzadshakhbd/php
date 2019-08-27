<doctype html>
    <html lang="en">
        <head>
            <meta charset="utf-8">
            <title>array-associative</title>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        </head>
        <body>
           <?php 
                $animal = array('Tiger', 'Lion', 'Elephant', 'Snake', 'Monkey', 'b'=>'Bear', 'Cat', 'Dog', 'Hen');
                
                // echo $animal['b'];

                foreach($animal as $key => $b){
                    echo $key. " ". $b . "<br>";
                };
           ?>
        </body>
    </html>