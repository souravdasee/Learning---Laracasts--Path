<?php 

require 'functions.php';
// require 'router.php';
require 'Database.php';

$config = require('config.php');

$db = new Database($config['database']);

$id = $_GET['id'];
$query = "select * from posts where id = :id";  //we can use "?" in ":id"

$posts = $db->query($query, ['id' => $id])->fetch();  // then 'id' will not be an associative array, i.e. only "$id"  &&  // we can use ':id' in 'id' associative

dd($posts);