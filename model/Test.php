<?php


/**
 * 
 */
class SoccerPlayer{
    
    public $cleats;
    public $ball;
    public $jersey;
    
    
 
    function __construct($cleats, $ball, $jersey)
    {
        $this->cleats = $cleats;
        $this->ball = $ball;
        $this->jersey = $jersey;
    }
    
    function shoot(){
        return "I'm Justin I have " . $this->cleats . "cleats" . " I am 
                myself a SoccerPlayer " . $this->ball . " and I have a " . $this->jersey . 
                ".";
        
        $Justin = new SoccerPlayer(7, "cleats", "Ball");
    echo $justin->shoot();
    echo "<br>";
    echo $justin->jersey;


       
    


   
?>