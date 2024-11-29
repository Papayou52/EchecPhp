<?php
    class Pion extends PieceEchec {


        public function canGo(int $y, int $x) : bool {
            if ($this->positionValide($y,$x) == false) 
            return false;
            if ($x != $this-> x) return false;
            if ($this->couleur == 2) {
                if ($this-> y == 7 && ($y + 2 == $this -> y || $y + 1 == $this -> y ) && $x == $this -> x) return true;
                if ($this -> y !== 7 && $x = $this -> x && $y + 1 == $this -> y ) return true;
                else return false;
            } 
            if ($this->couleur == 1) {
                if ($this-> y == 2 && ($y - 2 == $this -> y || $y - 1 == $this -> y ) && $x == $this -> x) return true;
                if ($this -> y !== 2 && $x = $this -> x && $y - 1 == $this -> y ) return true;
                else return false;
            } else return false;
    
    }



        public function peutManger(PieceEchec $piece)  {
                
            echo get_class($this).":". $this."Peut manger ? ";
            echo  get_class($piece). ":". $piece;
            $deltax = abs($piece->x - $this->x);
            $deltay = abs($piece->y - $this->y);
            if ($this->couleur == $piece->couleur ) {
                echo "NON<br>";
                return false;
            }
            if ($this->couleur == 2) {
                if ($deltax == 1 && $deltay == 1 && (($piece->x != $this->x) && ($piece->y < $this->y) )) {
                    echo "Oui <br>";
                    return true;
                    
                }
                
            else  {
                echo "NON <br>";
                return false; 
            }
            }
            if ($this->couleur == 1){
                if ($deltax == 1 && $deltay == 1 && (($piece->x != $this->x) && ($piece->y > $this->y) )){
                    echo " Oui <br>";
                    return true;
                    
                }
            else { echo "NON <br>";
                return false; 
            }
            }

            
            }
        
        
        
        
         
            
        


    }
?>