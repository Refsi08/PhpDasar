<?php
//Date
//Untuk menampilkan tanggal dan format tertentu
// echo date("l,d-M-Y");

// Time
//Unix Timestamp / EPOCH time
// detik yang sudah berlaku sejak 1 januari 1970
//echo time();
// echo date("l, d-M-Y", time() + 60 * 60 * 24 * 100);


// mktime
// untuk membuat sendiri detiknya (bisa untuk menentukan tanggal lahir)
// mktimr(0,0,0,0,0,0,) ada 6 parameter
// jam, menit, detik, bulan, tanggal, tahun
// contoh menghitung hari lahir
echo date("l", mktime(0, 0, 0, 7, 16, 2000 ));

// strtotime
// kebalikan dari mktime

echo date("l", strtotime("16 July 2000"));
