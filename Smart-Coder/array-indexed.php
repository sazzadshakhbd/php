<doctype html>
    <html lang="en">
        <head>
            <meta charset="utf-8">
            <title>array-indexed</title>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        </head>
        <body>
           <?php 
                $animal = array('Tiger', 'Cat', 'Dog', 'Rat', 'Monkey', 'Hen', 'Bird', 'Elephant');
                $length = count($animal);

                
                
                // echo $animal[3];


                /*
                    for($i = 0; $i < 5; $i++){
                        echo $animal[$i]. "<br>"; 
                    }
                */

                /*
                    echo $length;
                    for($i = 0; $i < $length; $i++){
                        echo $animal[$i] . "<br>";
                    }
                */
                foreach($animal as $allNames){
                    echo $allNames . "<br>";
                }

           ?>
        </body>
    </html>