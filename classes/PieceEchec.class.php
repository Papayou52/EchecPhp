<?php
class PieceEchec {

    //Parametre
    Private  $y  ;
    Private  $x  ;
    Private  $couleur ; // 1 = Blanc 2 = Noir

    //Constructeur
    /**
     * 
     * @param int $y;
     * @param int $x;
     * @param int $couleur;
     */

     public function __construct(int $x, int $y, int $couleur)
     {  if ($couleur == 1 || $couleur == 2) {
        $this->couleur = $couleur; 
    } else {
        throw new Exception('Couleur de la piece inconnue');
    }
        // if (($x < 1 || $x > 8)||($y < 1 || $y > 8)) {
        //     throw new Exception('Coordonées de la piece incorrectes');
        // } else {
            $this ->x = $this->setX($x);
            $this ->y = $this->setY($y);
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
                throw new Exception('Coordonées "X" de la piece incorrectes');
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
            throw new Exception('Coordonées "Y" de la piece incorrectes');
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