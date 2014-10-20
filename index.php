<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <script src="//ajax.googleapis.comlp/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <title></title>
    </head>
    <body>
        <?php
        $age='13';
                
       if($age >14){
            echo 'you are older than 14.';
       }
       else if($age <13){
           echo'you are not older than 15';
       }
       
     
       $soccerPlayers = array('Ronaldino' = 'goals', 'pele' => 'legend');
       echo($soccerPlayers['ronaldino']);
       echo "<br>";
       print_r($cars);
       
        ?>
        
        
    </body>
</html>