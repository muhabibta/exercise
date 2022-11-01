<?php

/*  Dibawah ini merupakan fungsi yang bernama 'hanyaYangHabisDibagiTiga(arr)' 
    yang menerima 1 buah parameter yaitu 
    
    'arr' berupa Array.
    
    Anda diharapkan untuk melengkapi fungsi tersebut agar ketika fungsi dijalankan menghasilkan array yang berisikan angka-angka yang habis dibagi 3.
    
    CONTOH: 
=>  input parameter 'arr' yaitu [1, 2, 3, 4, 5]
=>  maka hasil/outputnya adalah [3]

    CONTOH 2:
=>  input paramater 'arr' yaitu [2, 4, 6, 8, 9, 17]
=>  maka hasil/outputnya adalah [6, 9]

*/

function hanyaYangHabisDibagiTiga($arr) {
    // Tulis code kalian dibawah ini (code dapat kalian tambah/ubah sesuai kreativitas kalian).
    $newArr = [];
    $i = 0;
    foreach ($arr as $i => $item) {
        if ($item % 3 === 0) {
            $newArr[$i] = $item;
            $i++;
        }
    }
    print_r($newArr);
    return $newArr;
    
}

hanyaYangHabisDibagiTiga([1, 2, 3, 4, 5]);