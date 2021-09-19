<?php
/**
 * classe de Teste
 */

 class Teste {
     private $valX;
     private $valY;
     
     public function __construct($valX, $valY) {
         $this->valX = $valX;
         $this->valY = $valY;
     }

     public function getValX() {
         return $this->valX;
     }

     public function getValY() {
         return $this->valY;
     }

     public function soma() {
         return $this->valX + $this->valY;
     }
 }
