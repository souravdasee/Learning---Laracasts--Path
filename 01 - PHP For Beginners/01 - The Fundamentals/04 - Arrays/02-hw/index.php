<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>
    <style>
        body{
            /* display: grid;
            place-items: center;
            height: 100vh;
            margin: 0;
            font-family: sans-serif; */
            background-color: black;
            color: white;
        }
    </style>
</head>
<body>
    <h1>Top Performing Users</h1>


    <?php
        $usernames = [
            "souravdasee",
            "daseesourav",
            "eesouravdas"
        ];
    ?>

    <ol>
        <?php foreach ($usernames as $username) : ?>
            <li><?= $username ?></li>
        <?php endforeach; ?>
    </ol>
</body>
</html>