<?php

class Datbase {

    private $connection;
    private $host;
    private $username;
    private $password;
    private $database;

    public function __construct($host, $username, $password, $databse) {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;
    }

    public function openConnection() {
        $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);

        if ($this->connection->connect_error) {
            die("Error: " . $thisconnection->connect_error);
        }
    }

    public function closeConnection() {
         if(isset($this->connecttion)){
            $this->connection->close();
        }
    }
    //a fucntion is just a name we give to block of code that can be executeed whenever we need it
   

    public function query($string) {
        
    }

}

//cretaed global variables that wil be accessed throughout the database class
// set up the visibility so it can be accessed in its classs
//when we are creating a new object the varibles are hidden so no one can modify them
// to create a new instance of an object
//we want to store the information within our object that way we have access to it through out our object.
//we want and need to get the information to our global variables.
//set up an isset to set up the variables to check up if theres anything within the variable