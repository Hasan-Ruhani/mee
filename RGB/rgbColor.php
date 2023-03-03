<?php
    class RGB{
        private $color;    //#ff0000
        private $red;
        private $green;
        private $blue;

        function __construct($colorCode = ''){
            $this -> color = ltrim($colorCode, '#');
            $this -> perseColor();
        }

        function getColor(){
            return $this -> color;
        }

        function getRGBColor(){
            return array($this -> red, $this -> green, $this -> blue);
        }

        function readRGBColor(){
            echo "Red = ".$this -> red. "\n";
            echo "Green = ".$this -> green. "\n";
            echo "Blue = ".$this -> blue. "\n";
        }

        function setColor($colorCode){
            $this -> color = ltrim($colorCode, '#');
            $this -> perseColor();
        }

        private function perseColor(){
            if($this -> color){
                list($this -> red, $this -> green, $this -> blue) = sscanf($this -> color, '%02x%02x%02x');
                echo "Colors = ".$this -> red. $this -> green. $this -> blue. "\n";
            }
            else{
                list($this -> red, $this -> green, $this -> blue) = array(0, 0, 0);
            }
        }

        function getRed(){
            return $this -> red;
        }
        function getGreen(){
            return $this -> green;
        }
        function getBlue(){
            return $this -> blue;
        }
    }

    $myColor = new RGB("#ff005");
    $myColor -> readRGBColor();

?>