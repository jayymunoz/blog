<?php
     $title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
     $post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);
     //this is a post where we send information
     //this post is good to php
     //this is so were able to filter the input
     
     
     
     echo "<p>Title : $title</p>";
     echo "<p>Title : $post</p>";

     //this folder is to create a post and to push it to our data base