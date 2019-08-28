<doctype html>
    <html lang="en">
        <head>
            <meta charset="utf-8">
            <title>date</title>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        </head>
        <body>
           <?php 
              
              echo date('l',mktime(0,0,0,12,18,1983));
           ?>
        </body>
    </html>