<?php
/**
 * classe de Teste
 */

 class Teste {
     private $valX;
     private $valY;
     
     /**
      * Construtor
      */
     public function __construct($valX, $valY) {
         $this->valX = $valX;
         $this->valY = $valY;
     }

     /**
      * Get valor de X
      */
     public function getValX() {
         return $this->valX;
     }

     /**
      * Get valor de Y
      */
     public function getValY() {
         return $this->valY;
     }

     /**
      * Soma
      */
     public function soma() {
         return $this->getValX() + $this->getValY();
     }

 }
