<?php

/**
 * Description of Dados
 *
 * @author thermo
 * classe para objetos aleatorios
 * gera os valores de cor, posição x e y
 * e forma aleatoriamente
 */


class Dados {
    public $forma;
    public $cores;
    public $posicaox;
    public $posicaoy;
    
    
    function __construct() {
       $this->setForma();
       $this->setCores();
       $this->setPosicaox();
       $this->setPosicaoy();

    }

    function getForma() {

        return $this->forma;
    }

    function getCores() {
        return $this->cores;
    }

    function getPosicaox() {
        return $this->posicaox;
    }

    function getPosicaoy() {
        return $this->posicaoy;
    }

    function setForma() {
        //formas predefinidas para o sorteio
        $formato = array();
        $formato[1] = "triangulo";
        $formato[2] = "quadrado";
        $formato[3] = "circulo"; 
        $formato[4] = "retangulo"; 
        $formato[5] = "losango";
        $formato[6] = "trapezio";
        $formato[7] = "elipse";

        $form = $formato[mt_rand(1, 7)];
        $this->forma = $form;
    }


    function setCores() {
        $cores = array();
        //cores pre determinadas para o sorteio
        $cores[1]="#8B4513";//marrom
        $cores[2]="#FFFF00";//amarelo
        $cores[3]="#00FF00";//verde
        $cores[4]="#FF1493";//rosa
        $cores[5]="#FFFFFF";//branco
        $cores[6]="#000080";//azul
        $cores[7]="#696969";//cinza
        $cores[8]=" #FF0000";//vermelho
        $cores[9]=" #DDA0DD";//Plum 
        $cores[10]="#00FFFF";//azul claro   

        $cor= $cores[mt_rand(1, 10)];
        $this->cores = $cor;
    }

    function setPosicaox(){
        //posicao no eixo X
        $posicaox = mt_rand(1, 400);
        $this->posicaox = $posicaox."px";
    }

    function setPosicaoy() {
        //posicao no eixo y
        $posicaoy = mt_rand(1, 120);
        $this->posicaoy = $posicaoy."px";
    }

    /*funcão de debug*/
    function mostrar(){
        echo $this->forma." --";
        echo $this->cores."--";
        echo $this->posicaox."-- ";
        echo $this->posicaoy."--</br>";

    }



}
