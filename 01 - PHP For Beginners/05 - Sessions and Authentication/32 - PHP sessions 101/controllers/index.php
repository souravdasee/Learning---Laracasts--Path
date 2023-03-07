<?php

$_SESSION['name'] = 'Sourav';

view("index.view.php", [
    'heading' => 'Home'
]);