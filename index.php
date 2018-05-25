<?php
/**
 * 
 * Programa que llama a la clase funicones y ejecuta cada una de sus funcines
 * 
 * @author Marcos
 * @version: 1.0
 */
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once 'clase.php';
        $f = new funciones();
               
        //comprobar si 2 palabras son palindromos
        $palabra = 'aguacate';
        echo 'La palabra '.$palabra; 
        if(!$f->palindromo($palabra)){ echo ' no';}
        echo ' es un palíndromo.</br>';
        
        $palabra = 'afromorfa';
        echo 'La palabra '.$palabra; 
        if(!$f->palindromo($palabra)){ echo ' no';}
        echo ' es un palíndromo.</br>';
        
        //Comprobar si 2 números son primos
        $n=25;
        echo 'El número '.$n; 
        if(!$f->primo($n)){ echo ' no';}
        echo ' es primo.</br>';

        $n=19;
        echo 'El número '.$n; 
        if(!$f->primo($n)){ echo ' no';}
        echo ' es primo.</br>';
        
        //Comprobar que numero es mayor
        $n=452;
        $m=935;
        echo 'El número mayor entre '.$n.' y '.$m.' es: '.$f->mayor($n, $m).'</br>';
        
        $n=1923;
        $m=935;
        echo 'El número mayor entre '.$n.' y '.$m.' es: '.$f->mayor($n, $m).'</br>';
        
        //Hago el cálculo de una función de primer grado
        $a=5;
        $b=-15;
        echo 'El valor de x en la ecuación '.$a.'x+'.$b.'=0 es: '.$f->ecuacion($a, $b).'</br>';
        
        $a=3;
        $b=63;
        echo 'El valor de x en la ecuación '.$a.'x+'.$b.'=0 es: '.$f->ecuacion($a, $b).'</br>';
        
        //compruebo si son bisiestos una serie de años
        $anos=[1900,1910,1920,1935,1950,1980,1990,2000];
        foreach ($anos as $ano) {
            echo 'El año '.$ano;
            if (!$f->bisesto($ano)) { echo ' no'; }
        echo ' es bisiesto.</br>';
        }
        ?>
    </body>
</html>
