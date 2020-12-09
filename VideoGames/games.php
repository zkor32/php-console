<?php
    namespace videogames;
    class Games{
        public $players;
        public $company;
        public $title;
        public $type;

        function __construct($players, $company, $title, $type){
            $this->players = $players;
            $this->company = $company;
            $this->title = $title;
            $this->type = $type;

        }

        function getGame(){

            return "El juego " . $this->title . " se puede jugar con un máximo de " . $this->players . " jugadores.<br> 
            Fue realizado por la compañia " . $this->company . " y pertenece al género de " . $this->type;  

        }

    }   
?>