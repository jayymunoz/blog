<?php
    require_once(__DIR__ . "/../model/database.php");
    
    $connection = new mysqli($host, $username, $password);
    
    if($connection->connect_error) {
     
        die("Error: " . $connection->connect_error);      
    }
       
    $exists = $connection ->select_db($database);
    
    if(!$exists) {
       $query = $connection->query("CREATE DATABASE $database");
       //sends command to our server
       //it exuses the info and it stores it into the jquery
        if($query) {
            //we want to output a message so therefore we need $query
           echo "successfully created database: " . $database;
                   //the dot is used to congaginate
                   
        }
    

    }
    
   else {
       echo "Database already exists."; 
       //this is only going to be executed when the database already exist
    }
    
    
    $query = $connection->query("CREATE TABLE posts ("
            . "id int(11)NOT NULL AUTO_INCREMENT,"
            . "title varchar (225) NOT NULL,"
            . "post text NOT NULL,"
            . "PRIMARY KEY (id))");
    //were refercing our connection variable
    //not null makes theb id to not be known
    //were telling the variable on the bottom is the primary key
    //the query is creating the data table there on top
    
    if($query) {
        echo "Successfully created table: posts";
    }
    else{
        echo "<p>$connection->error</p>";
        //were telling it that its false
        //were doing paragraph tags that way the lines wont be together
    }
    
    $connection->close();