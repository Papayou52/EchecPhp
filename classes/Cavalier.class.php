<?php
    class Cavalier extends PieceEchec {

        

        //Fonction canGo
        /**
         * Determine si la piece peut se déplacer sur la case au coordonées rentrés en argument 
         * 
         * @return bool
         */

         
    //Constructeur
    /**
     * 
     * @param int $y;
     * @param int $x;
     * @param int $couleur;
     */

    //  public function __construct(int $x, int $y, int $couleur) {
    //     parent :: __construct( $x, $y, $couleur);
        
    //  }



        public function canGo(int $y, int $x) : bool {
            if (($y < 1 || $y > 8) || ($x < 1 || $y > 8)){
                return false;
            }
            elseif(($this ->y + 2 == $y) && ($this ->x - 1 == $x)){
                return true;
            }elseif(($this ->y + 2 == $y) && ($this ->x + 1 == $x)){
                return true;
            }elseif(($this ->y + 1 == $y) && ($this ->x + 2 == $x)){
                return true;
            }elseif(($this ->y - 1 == $y) && ($this ->x + 2 == $x)){
                return true;
            }elseif(($this ->y - 2 == $y) && ($this ->x + 1 == $x)){
                return true;
            }elseif(($this ->y - 2 == $y) && ($this ->x - 1 == $x)){
                return true;
            }elseif(($this ->y - 1 == $y) && ($this ->x - 2 == $x)){
                return true;
            }elseif(($this ->y + 1 == $y) && ($this ->x - 2 == $x)){
                return true;
            } else {
                return false;
            }
                
                


        }

    }


?>