<?php

/*  Dibawah ini merupakan fungsi yang bernama 'printWithArr()' 
    Anda diharapkan untuk melengkapi fungsi tersebut agar ketika fungsi dijalankan hasilnya menjadi:
    
     OUTPUT:
=>   Hari ini saya pergi ke {Seaworld} bersama teman-teman.
=>   Disana saya membeli melihat ikan {Lumba-lumba}, {Hiu}, dan {Pari}.
=>   Saat itu rombongan kami berjumlah {3} orang, dengan harga tiket per orang sebesar Rp{75000}, sehingga total harga menjadi {225000}.
=>   Kami pulang menggunakan {Ojek Online}. 

    Simbol kurawal diantara kata wajib menggunakan DATA dari ARRAY yang diberikan. Struktur hasil string harus sesuai hasil diatas.
*/

function printWithArr() {
    $arr = [
        ['Lumba-lumba', 'Kura-kura', 'Hiu', 'Udang', 'Pari'], 
        ['Dufan', 'Atlantis', 'Seaworld'],
        [
            [
                "namaPengunjung" => 'Jan',
                "usia" => 20,
                "orangDewasa" => true,
            ],
            [
                "namaPengunjung" => 'Ken',
                "usia" => 19,
                "orangDewasa" => true,
            ],
            [
                "namaPengunjung" => 'Pon',
                "usia" => 15,
                "orangDewasa" => false,
            ],
        ],
        [
            "hargaTiket" => 75000,
            "jumlahPengunjung" => 3,
        ],
        'Ojek Online'
    ];
    // Tulis code kalian dibawah ini (code dapat kalian tambah/ubah sesuai kreativitas kalian).
    $seaworld = $arr[1][2];
    $lumba = $arr[0][0];
    $hiu = $arr[0][2];
    $pari = $arr[0][4];
    $jumlah = $arr[3]["jumlahPengunjung"];
    $harga = $arr[3]["hargaTiket"];
    $totalHarga = $jumlah * $harga;
    $ojek = $arr[4];

    echo "Hari ini saya pergi ke $seaworld bersama teman-teman.</br>
           Disana saya membeli melihat ikan $lumba, $hiu, dan $pari.</br>
           Saat itu rombongan kami berjumlah $jumlah orang, dengan harga tiket per orang sebesar Rp$harga, sehingga total harga menjadi Rp$totalHarga.</br>
           Kami pulang menggunakan $ojek.";
}

printWithArr();