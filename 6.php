<?php

/*  Dibawah ini merupakan fungsi yang bernama 'printArrKelipatanTigaDanEmpat(arr)' 
    yang menerima 1 buah parameter yaitu 
    
    'arr' berupa Array.

    Anda diharapkan untuk melengkapi fungsi tersebut agar ketika fungsi dijalankan akan mem-print angka yang merupakan kelipatan 3 & 4.
    
    CONTOH: 
=>  input parameter 'arr' yaitu [4, 12, 5, 24, 8, 9, 10]
=>  maka hasil/outputnya adalah: 
    12 
    24

    CONTOH 2:
=>  input paramater 'arr' yaitu [2, 4, 72 6, 8]
=>  maka hasil/outputnya adalah: 
    72

*/

function printArrKelipatanTigaDanEmpat($arr) {
    // Tulis code kalian dibawah ini (code dapat kalian tambah/ubah sesuai kreativitas kalian).
    $newArr = [];
    $i = 0;
    foreach ($arr as $i => $item) {
        if ($item % 3 === 0 || $item % 4 === 0) {
            $newArr[$i] = $item;
            $i++;
        }
    }
    
    print_r($newArr);
    return $newArr;
 
}

printArrKelipatanTigaDanEmpat([2, 4, 72, 6, 8]);