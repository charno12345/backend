<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Title</title>
    </head>
    <body>
        <style>
            hr{
                border-radius: 0px;
                margin: 0px;
            }
        </style>
        <?php
        $colors = array("red", "white", "blue");

        foreach ($colors as $value) {
            echo "<hr width='150px' size='33px' color='$value'> ";
        }
        ?>


    </body>
</html>