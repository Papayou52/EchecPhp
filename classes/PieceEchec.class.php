<?php
abstract class PieceEchec {

    //Parametre
    protected  $y  ;
    protected  $x  ;
    protected  $couleur ; // 1 = Blanc 2 = Noir

    //Constructeur
    /**
     * 
     * @param int $y;
     * @param int $x;
     * @param int $couleur;
     */

     public function __construct(int $y, int $x, int $couleur)
     {  if ($couleur != 1 && $couleur != 2) {
        throw new PieceEchecsException('Couleur de la piece inconnue');
    } else {
            $this ->x = $this->setX($x);
            $this ->y = $this->setY($y);
            $this->couleur = $couleur; 
        }
        // }
     }
     // --------------------LES SETTERS --------------

     /** Fonction setX 
      * Modifie la valeur x
      *
      * @return int
      */
     
        public function setX($x) : int {
            if ($x < 1 || $x > 8) {
                throw new PieceEchecsException('Coordonées "X" de la piece incorrectes');
            } else {
                $this ->x = $x;
                return $x;
            }
        }


         

        /** Fonction setY
      * Modifie la valeur y
      * 
      * @return int
      */
     
      public function setY($y) : int {
        if ($y < 1 || $y > 8) {
            throw new PieceEchecsException("Coordonées 'Y' de la piece incorrectes");
        } else {
            $this ->y = $y;
            return $y;
        }
    }

     // --------------------LES GETTERS --------------

     //Fonction getCouleur
    /**
     *
     * @return int
     */

     public function getCouleur() :string{
        if ($this->couleur == 1) {
            echo 'La piece est blanche <br>';
            return 1;
        } else {
            echo 'La piece est Noire <br>';
            return 2;
        }
     }

     //Fonction getCouleurCase
     /**
      * Retourne la couleur de la case 1 = Blanc et 2 = Noir
      *
      *@return int
      */

      public function getCouleurCase() :int {
        if (($this->x + $this->y) % 2 == 0 ){
            echo 'La case est Noire <br> ';
            return 2;
        } else {
            echo 'La case est blanche<br>';
            return 1;
        }
      }

      public abstract function canGo(int $y, int $x) : bool;


      protected function positionValide(int $y, int $x) : bool{
        if ($y < 1 || $y > 8 || $x < 1 || $x > 8)
            return false;
        return true;
      }

      //Function peutManger
      /**
       * 
       */
        public function peutManger(PieceEchec $piece)  {
             
            echo get_class($this).":". $this."Peut manger ?";
            echo  get_class($piece). ":". $piece;
            if ($this->couleur != $piece->couleur && $this->canGo($piece->y,$piece->x)) {
            echo "OUI<br>";
            return true;
        } else echo "NON<br>";
            return false;
            
            
            
        }


      //function toString
      /**
       * 
       */

       public function __toString() : string
       {
        $msg = 'Coordonées : x'.$this->x;
        $msg .=' ; y'.$this->y;
        if ($this->couleur == 1) {
            $msg .= '. Couleur : Blanc';
        } else {
            $msg .= '. Couleur : Noir';
        }
        return $msg .='<br>';
       }





















}
?>