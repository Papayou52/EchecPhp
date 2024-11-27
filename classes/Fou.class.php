<?php
    class Fou extends PieceEchec{

        public function canGo(int $y, int $x) : bool {
            if ($y < 1 || $y > 8 || $x < 1 || $x > 8){
               throw new Exception('La case sortirait du pateau'); //Plante le programme car n'est pas un bool
            }
            $deltatY = abs($this->y - $y);
            $deltatX = abs($this->x - $x);
            return $deltatY === $deltatX;
        }

        




        }

        




?>