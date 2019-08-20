<doctype html>
    <html lang="en">
        <head>
            <meta charset="utf-8">
            <title>string</title>
        </head>
        <body>
            <?php
                $name = "Md Sazzad Ali Shakh";

                echo strlen($name);
                echo "<br>";
                echo str_word_count($name);
                echo "<br>";
                echo strpos($name, "Ali");
                echo "<br>";
                echo strrev($name);
                echo "<br>";
                echo str_replace("Sazzad", "Sobuz", $name)
            ?>
        </body>
    </html>