<?php 

require 'functions.php';
require 'Database.php';
require 'Response.php';
require 'router.php';


// $id = $_GET['id'];
// $query = "select * from posts where id = :id";  //we can use "?" in ":id"

// $posts = $db->query($query, ['id' => $id])->fetch();  // then 'id' will not be an associative array, i.e. only "$id"  &&  // we can use ':id' in 'id' associative

// dd($posts);