<?php
     require_once(__DIR__ . "/../model/config.php");
     //we use "/../ to get out of the view folder"
?>
<nav>
    <ul>
        <li><a href="<?php echo $path . "post.php" ?>">Blog Post Form</a></li>
        <!--were telling it to connect to the same path in the post.php server -->
        <!-- telling it to look at the web server-->
    </ul>
</nav>

