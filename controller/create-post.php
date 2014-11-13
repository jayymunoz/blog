<?php 
require_once(__DIR__. "/../model/database.php");
//require database file from the modal

$connection = new mysqli($host, $username, $password, $database);

//this is taking me to my database.php file
//this post means its receiving data called title and filter

     $title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
     $post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);
     //this is a post where we send information
     //this post is good to php
     //this is so were able to filter the input
     
     
     
    $query = $connection->query("INSERT INTO posts SET title = '$title', post = '$post'");
    
    //making sure the right variable string is getting stored
    //created a query
    
    if($query) {
        echo "<p>Successfully inserted post: $title </p>";
    }
     
    else{
        echo"<p>$connection->error</p>";
    }
    //inserted a query for a connection
        
     
     $connection->close();