<?php
    class Roi extends PieceEchec{

        
        public function canGo(int $y, int $x) : bool {
            if ($this->positionValide($y,$x) == false) 
            return false;
            elseif ($this -> y == $y -1 && $this-> x == $x -1)  return true;
            elseif ($this -> y == $y  && $this-> x == $x -1)  return true;
            elseif ($this -> y == $y +1 && $this-> x == $x -1)  return true;
            elseif ($this -> y == $y +1 && $this-> x == $x )  return true;
            elseif ($this -> y == $y +1 && $this-> x == $x +1)  return true;
            elseif ($this -> y == $y  && $this-> x == $x +1)  return true;
            elseif ($this -> y == $y -1 && $this-> x == $x +1)  return true;
            elseif ($this -> y == $y -1 && $this-> x == $x)  return true;
            else return false;
    }

    }
?>