<?php 

const BASE_PATH = __DIR__ . '/../';


require BASE_PATH . 'functions.php';

spl_autoload_register(function ($class)
{
    require base_path("Core/{$class}.php");
});

require base_path('router.php');


// $id = $_GET['id'];
// $query = "select * from posts where id = :id";  //we can use "?" in ":id"

// $posts = $db->query($query, ['id' => $id])->fetch();  // then 'id' will not be an associative array, i.e. only "$id"  &&  // we can use ':id' in 'id' associative

// dd($posts);