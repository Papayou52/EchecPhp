<?php
    class Fou extends PieceEchec{

        public function canGo(int $y, int $x) : bool {
            if ($this->positionValide($y,$x) == false) 
            return false;
            if ($this->x == $x && $this -> y == $y ) return false;
            $deltatY = abs($this->y - $y);
            $deltatX = abs($this->x - $x);
            return $deltatY === $deltatX;
        }

        




        }

        




?>