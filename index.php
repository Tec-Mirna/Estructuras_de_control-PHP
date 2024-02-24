<?php
echo '<h1>PHP</h1>';
# EJERCICIO 1
echo '<h3>1- Serie Fibonacci </h3>';
   function fibonacci($numN){

     $number1 = 0; // 0 es el primer número en la serie de Fibonacci
     $number2 = 1; // 1 es el primer número en la serie de Fibonacci

    //Itera desde 1 a $numN
    for($i = 1; $i <= $numN; $i++){
       $number3 = $number1 + $number2; //Suma de los 2 numeros anteriores
       $number1 = $number2; //Número1 sea igual a número2
       $number2 = $number3; //Número2 sea igual a número3
       echo  $number3 . ' - ' ; //Imprimir el número3 y separar con el "-"
    }
   } fibonacci(10); //Genar los primeros 10 numeros


   # EJERCICIO 2

   echo '<h3>2- Numeros primos </h3>';
   function es_primo($num){
    
     $primo = true; //Verdadero asumiendo que el número dado es primo
    //Inicializar en 2 para evitar redundancia --- i menor o igual que la mitad de num
    for( $i = 2; $i <= $num / 2; $i++){

        // Verifica si el numero a evaluar es divisible por el valor actual de  i
        if ($num % $i == 0){ 
           $primo = false; // Falso si el if es verdadero 
           break;
        }
    }

    if($primo) {
        echo "El número \"$num\"  es primo"; //No se encontró otro divisor aparte de 1 y si mismo
    }else  {
        echo "El número  \"$num\" no es primo"; // Se encontró otro divisor difrente de 1 y el mismo
    }
   } es_primo(29);

   # EJERCICIO 3 
   echo '<h3>3- Palíndromo</h3>';
   function es_palindromo($cadena){

        //strtolower = convertir a minúscula
        //str_replace(' ', '', $cadena) = reemplaza los espacios por cero espcios en la cadena
        $cadena_sin = strtolower(str_replace(' ', '', $cadena));
        
        // strrev = invertir cadena
        $cadena_invertida = strrev($cadena_sin);# strrev= invierte la cadena

        // Si cadena es igual a cadena invertida es un palíndromo
        if ($cadena_sin === $cadena_invertida){
            echo "La cadena  \"$cadena\"  es un palíndromo ✅";
        } else {
            echo "La cadena  \"$cadena\"  no es un palíndromo ❌";
        }
   } es_palindromo("Yo hago yoga hoy");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estructuras de Control PHP</title>
  
    <style>
        body{
            margin: 50px;
            background-color: darkkhaki;
        }
     
    </style>
</head>
<body>
    
</body>
</html>