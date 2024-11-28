<?php
    class Tour extends PieceEchec {

        public function canGo(int $y, int $x) : bool {
            if ($this->positionValide($y,$x) == false) 
            return false;
            if ($this->x == $x && $this -> y == $y ) return false;
            if ($x == $this-> x && $y !==$this -> y) return true;
            if ($x !== $this-> x && $y ==$this -> y) return true;
            else return false;
    }
    }

?>