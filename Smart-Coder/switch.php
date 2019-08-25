<doctype html>
    <html lang="en">
        <head>
            <meta charset="utf-8">
            <title>switch</title>
        </head>
        <body>
            <?php 
                $x = "red";
                switch($x){
                    case "green":
                    echo "My favourite color is green";
                    break;

                    case "yellow":
                    echo "My favourite color is yellow";
                    break;

                    case "red":
                    echo "My favourite color is red";
                    break;

                    default:
                    echo "you have no color choice";
                    break;
                }
            ?>
        </body>
    </html>