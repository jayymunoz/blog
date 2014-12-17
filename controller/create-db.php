<?php



$query = $_SESSION["connection"]->query("CREATE TABLE posts  ("
        . "id int(11) NOT NULL AUTO_INCREMENT," //creating id called 11
        . "title varchar(255) NOT NULL,"
        . "post text NOT NULL," //creating a new post
        . "DateTime datetime NOT NULL,"
        . "PRIMARY KEY (id))"); // setting this as primary key
//created a query that 

if($query){
    echo "Succesfully created table: posts";
}
else{
    echo "<p>" . $_SESSION["connection"]->error . "</p>";
}

$query = $_SESSION["connection"]->query("CREATE TABLE users("
			. "id int(11) NOT NULL AUTO_INCREMENT,"
			. "username varchar(30) NOT NULL," //all are not null all valuse get set to  new user a new user canot get be created with out these
			. "email varchar(50) NOT NULL,"
			. "password char(128) NOT NULL,"
			. "salt char(128) NOT NULL,"
			. "PRIMARY KEY (id))"); 
 


 if($query){
 	echo "<p>Succesfully created table: users</p>" ;
 }
 else{
 	echo "<p>" . $_SESSION["connection"]->error . "</p>";
 }