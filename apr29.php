<?php

// Scrivi una funzione che prenda come input un array e restituisca un nuovo array con gli stessi elementi ma in ordine inverso. Non utilizzare la funzione array_reverse().

function reverseArray($array){
    $newArray = [];
    for($i = 0; $i < count($array); $i++){
        array_unshift($newArray, $array[$i]);
    }

    return $newArray;
}

var_dump(reverseArray([1, 2, 3]));