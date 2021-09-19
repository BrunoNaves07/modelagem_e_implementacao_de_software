# Atividade Prática de Modelagem e Implementação de Software
#### Universidade Federal de Lavras
=====================================
A *atividade prática* consistem em criar um **repositório no GitHub** e definir algumas
diretrizes.

* Conter um **README com título**
* Texto formatado *itálico* e **negrito**
* Trecho de Código *(Estou usando PHP)*
* Listagem de tópicos (numeradas ou não)

#### Minha classe PHP
` class Teste {
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

 }`

