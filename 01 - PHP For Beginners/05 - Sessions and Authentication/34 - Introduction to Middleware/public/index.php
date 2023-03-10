<?php 

session_start();

const BASE_PATH = __DIR__ . '/../';


require BASE_PATH . 'Core/functions.php';

spl_autoload_register(function ($class)
{
    // Core\Database
    $class = str_replace('\\', '/', $class);

    require base_path("{$class}.php");
});

require base_path('bootstrap.php');

$router = new \Core\Router();

$routes = require base_path('routes.php');

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

$router->route($uri, $method);


// $id = $_GET['id'];
// $query = "select * from posts where id = :id";  //we can use "?" in ":id"

// $posts = $db->query($query, ['id' => $id])->fetch();  // then 'id' will not be an associative array, i.e. only "$id"  &&  // we can use ':id' in 'id' associative

// dd($posts);