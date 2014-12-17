<?php
 
 require_once(__DIR__ . "/../model/config.php"); 
 
 function  aunthicateUser() {
     if(!isset($_SESSION["aunthicated"])) {
     return false;
 }
 else {
 
     if($_SESSION["aunthicated"] !=true){
         return false;
     }
       else {
           return true;
        }
     }
 }
