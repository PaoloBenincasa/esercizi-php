<?php

// Calcola la media di un array: Scrivi una funzione che prenda un array di numeri come input e restituisca la media (la somma di tutti gli elementi divisa per il numero di elementi).

function calcAverage($array){
    $sum = array_reduce($array, function($acc, $el){
        return $acc + $el;
        },
        0
     );
    return $sum / count($array);
}

print_R(calcAverage([1,2,3,4,5]));

// Sostituisci tutte le occorrenze di una sottostringa: Scrivi una funzione che prenda una stringa principale, una sottostringa da cercare e una sottostringa di sostituzione come input. Dovrebbe restituire una nuova stringa in cui tutte le occorrenze della sottostringa da cercare sono state sostituite con la sottostringa di sostituzione.

function substituteAllOcc($string, $replace, $search){
    return str_ireplace($search, $replace, $string);
}

print_r(substituteAllOcc("locorotondo", "a", "o"));

// Estrai i numeri pari da un array: Scrivi una funzione che prenda un array di numeri interi come input e restituisca un nuovo array contenente solo i numeri pari presenti nell'array originale.

function extractEven($array){
    return array_filter($array, function($el){
        return $el % 2 === 0;
    });
}

print_r(extractEven([1,2,3,4,5]));