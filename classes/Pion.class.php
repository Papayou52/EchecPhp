<?php
    class Pion extends PieceEchec {


        public function canGo(int $y, int $x) : bool {
            if ($this->positionValide($y,$x) == false) 
            return false;
            if ($x != $this-> x) return false;
            if ($this->couleur == 1) {
                if ($this-> y == 7 && ($y + 2 == $this -> y || $y + 1 == $this -> y ) && $x == $this -> x) return true;
                if ($this -> y !== 7 && $x = $this -> x && $y + 1 == $this -> y ) return true;
                else return false;
            } 
            if ($this->couleur == 2) {
                if ($this-> y == 2 && ($y - 2 == $this -> y || $y - 1 == $this -> y ) && $x == $this -> x) return true;
                if ($this -> y !== 2 && $x = $this -> x && $y - 1 == $this -> y ) return true;
                else return false;
            } else return false;
    
    }


    }
?>