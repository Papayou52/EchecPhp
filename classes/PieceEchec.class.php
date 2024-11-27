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
        throw new Exception('Couleur de la piece inconnue <br>');
    }
        if (($x < 1 && $x > 8)&&($y < 1 && $y > 8)) {
            throw new Exception('Coordonées de la piece incorrectes<br>');
        } else {
            $this ->x = $x;
            $this ->y = $y;
        }
        
     }

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
            echo 'La case est Noire <br><br> ';
            return 2;
        } else {
            echo 'La case est blanche<br><br>';
            return 1;
        }
      }





















}
?>