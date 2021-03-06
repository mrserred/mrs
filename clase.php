<?php

/**
 * 
 * Clase que que contiene diferentes funciones. Las funciones son:
 * - Determinar si una palabra es un palíndromo
 * - Averiguar si un número dado es primo
 * - Dados dos números indicar cual es el mayor
 * - Resolver una ecuación de primero grado del tipo ax+b=0
 * - Dado un año saber si es bisiesto o no
 * @author Marcos
 * @version: 1.0
 */
class funciones {
    const CONSTANTE=0;
    private $variablePrivada;
    public $variablePublica;
    function __construct() {
        
    }
    
    /**
     * Devuelve el valor de la variable privada
     * @return int 
     */
    function getVariablePrivada() {
        return $this->variablePrivada;
    }

    /**
     * Devuelve el valor de la variable publica
     * @return int 
     */
    function getVariablePublica() {
        return $this->variablePublica;
    }

    /**
     * Modifica la variablePrivada
     * @param int $variablePrivada
     */
    function setVariablePrivada($variablePrivada) {
        $this->variablePrivada = $variablePrivada;
    }

    /**
     * Modifica la variablePublica
     * @param int $variablePublica
     */
    function setVariablePublica($variablePublica) {
        $this->variablePublica = $variablePublica;
    }
    
    /**
     * Función que devuelve true si una cadena de caracteres es un palíndromo, si se lee igual de derecha a izquierda
     * que de izquierda a derecha
     * @param String $frase
     * @return boolean 
     */
    function palindromo($frase) {
        $fraseReves='';
        
        for ($i = 0; $i < strlen($frase); $i++) {
            $fraseReves.=$frase[strlen($frase)-$i-1];
        }
        if ($frase==$fraseReves) {
            return true;
        }
        return false;
    }
    
    /**
     * Función que devuelve true si un número es primo
     * @param int $num
     * @return boolean
     */
    function primo($num) {
        for ($i = 2; $i < $num; $i++) {
            if ($num%$i==0) {
                return false;
            }
        }
        return true;
    }
    
    /**
     * Función que dado dos números, devuelve el que es mayor
     * @param int $n
     * @param int $m
     * @return int Numero mayor
     */
    function mayor($n,$m) {
        if($n>$m){
            return $n;
        }
        return $m;
    }
    
    /**
     * Función que resuelve ecuación del tipo ax+b=0. Pasados los parámetros $a (que representa al valor de x)
     * y $b (que representa al valor de b) nos da el resultado de la función. En caso que $a sea 0, devuelve 0
     * @param int $a
     * @param  int $b
     * @return int
     */
    function ecuacion($a,$b) {
        if ($a==0) {
            return 0;
        }
        return $b * -1 / $a;
    }
    
    /**
     * Función que pasado un año (tipo entero), devuelve true si ese año es bisiesto
     * @param int $ano
     * @return boolean
     */
    function bisesto($ano) {
        if ($ano%100==0) {
            if ($ano%400==0) {
                return true;
            }
            return false;
        }
        if ($ano%4==0) {
            return true;
        }
        return false;
    }
}