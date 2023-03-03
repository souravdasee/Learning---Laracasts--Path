<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>
</head>
<body>
    <h1>
        <?php
            echo "Hi, " . "Universe!";
        ?>

        <br>

        <?php
            $greeting = "Hello,";
            echo $greeting . " " . "World!  ";
            echo "$greeting World! ";
            echo '$greeting World!';
        ?>

        <br>

        <?php
            $name = "Sourav ";
            $surname = "Das ";
            echo $name . $surname;
            echo "$name" . "$surname";
            echo "$name $surname:" . "!";
        ?>
    </h1>
</body>
</html>