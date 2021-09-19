# Atividade Prática de Modelagem e Implementação de Software
#### Universidade Federal de Lavras

- A *atividade prática* consistem em criar um **repositório no GitHub** e definir algumas
diretrizes.

1. Conter um **README com título**
2. Texto formatado *itálico* e **negrito**
3. Trecho de Código *(Estou usando [PHP](https://www.php.net/))*
4. Listagem de tópicos (numeradas ou não)

#### Minha classe PHP
```
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
```
## Universidade Federal de Lavras

A [Universidade Federal de Lavras - UFLA](https://ufla.br/) é uma instituição de ensino superior pública federal
brasileira, sediada na cidade de Lavras/MG. A UFLA possui um dos melhores índices de qualidade do Brasil.
![Logo Universidade Federal de Lavras](/img/logo-ufla-transparente.png "Logo da Universidade Federal de Lavras")

