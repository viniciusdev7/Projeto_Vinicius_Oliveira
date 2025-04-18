<?php

class A {
    int A1;
    float A2;

    public function setA1() {
        return A1;
    }

    public function getA1() {
        return A1;
    }

    public function setA2() {
        return A2;
    }

    public function getA2() {
        return A2;
    }

    public function MA1(){
        echo "Metodo - MA1";
    }

    public function MA2(){
        echo "Metodo - MA2";
    }

    public function MA3(){
        echo "Alteração a classe A partir do clone";
    }   

    public function getSoma(int $a, int $b): int {
        return $a + $b;
    }
    public function getSoma2(int $a, int $b): int { 
        return $a + $b;
    }
}

