<?php
    namespace kidsgames;
    class Games{
        public $players;
        public $age;
        public $name;
        public $place;

        function __construct($players,$name,$age, $place){
            $this->players = $players;
            $this->name = $name;
            $this->age = $age;
            $this->place = $place;

        }

        function getGame(){

            return "El juego " . $this->name . " se juega con al menos " . $this->players . "personas , que tengan al menos " . $this->age . " años, y se debe realizar en  " . $this->place . ".";  

        }

    }   
?>