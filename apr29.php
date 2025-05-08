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

// Hai due array associativi che potrebbero contenere alcune chiavi in comune. Scrivi una funzione che li unisca in un unico array. Se ci sono chiavi duplicate, il valore della chiave nell'array risultante dovrebbe essere un array contenente tutti i valori associati a quella chiave nei due array originali.

// Esempio Input:
// PHP

// Esempio Output (ipotetico, la tua funzione dovrà generare qualcosa di simile):
// PHP

// ['a' => [1, 4, 7], 'b' => [2, 5], 'c' => 3, 'd' => 6]

$numbers1 = ['a' => 1, 'b' => 2, 'c' => 3, 'a' => 4];
$numbers2 = ['b' => 5, 'd' => 6, 'a' => 7];

function uniteArrayDuplicateKeys($array1, $array2) {
    $mergedArray = [];
    // itero sul primo array per ogni chiave/valore
    foreach($array1 as $key => $value){
        // se la chiave esiste già in merged
        if(array_key_exists($key, $mergedArray)){
            // prima controllo se la chiave è un array
            if(is_array($mergedArray[$key])){
                // se sì, aggiungo il nuovo valore all'array
                $mergedArray[$key][] = $value;
            } else{
                // se non è un array, creo un nuovo array contenente il valore esistente e quell nuovo
                $mergedArray[$key] = [$mergedArray[$key], $value];
            }
            // se invece la chiave non esiste, la aggiungo con il suo valore
        } else {
            $mergedArray[$key] = $value;
        }
    }

    foreach($array2 as $key => $value){
        if(array_key_exists($key, $mergedArray)){
            if(is_array($mergedArray[$key])){
                $mergedArray[$key][] = $value;
            } else {
                $mergedArray[$key] = [$mergedArray[$key], $value];
            }
        } else {
            $mergedArray[$key] = $value;
        }
    }

    return $mergedArray;
}

print_r(uniteArrayDuplicateKeys($numbers1, $numbers2));

// Scrivi una funzione che prenda due array come input e restituisca un nuovo array contenente solo gli elementi che sono presenti in entrambi gli array. Gestisci sia array numerici che associativi (considerando solo i valori per quelli associativi).

function intersect($array1, $array2){
    $newArray = array_intersect($array1, $array2);
    return $newArray;
}

$person1 = [
    'nome' => 'Alice',
    'eta' => 30,
    'citta' => 'Roma',
    'professione' => 'Ingegnere',
    'interessi' => ['programmazione', 'viaggi']
];

$person2 = [
    'cognome' => 'Rossi',
    'anni' => 30, 
    'paese' => 'Italia',
    'lavoro' => 'Sviluppatore',
    'hobby' => ['lettura', 'programmazione']
];

var_dump(intersect($person1, $person2));


