<?php

// scrivi una funzione che prenda una stringa come input e restituisca vero se è un palindromo, ignorando la differenza tra maiuscole e minuscole e i caratteri non alfanumerici

function isPalindrome($str){
    $clean = preg_replace('/[^a-zA-Z0-9]/', '', strtolower($str));
    return $clean === strrev($clean);
}


print(isPalindrome("anna") ? "true\n" : "false\n");

// Tronca una stringa: Scrivi una funzione che prenda una stringa e un numero massimo di caratteri come input. Se la stringa è più lunga del numero massimo, dovrebbe essere troncata alla lunghezza specificata e aggiungere "..." alla fine.

function truncateString($str, $limit){
    if(strlen($str) > $limit){
        return substr($str, 0, $limit) . "...";
    } else {
        return "the string is not longer than the limit";
    }
}

print(truncateString("Pao", 3));