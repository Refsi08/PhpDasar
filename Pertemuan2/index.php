<?php
// Pertemuan 2 - PHP Dasar
// Syntax PHP

// Standar Output
// echo -> Print
// print_r -> mencetak isi array
//  var_dump -> melihat isi variabel

// Penulisan syntaxs php
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP

// Variabel dan Tipe Data
// Variabel
// Tidak boleh diawali dengan angka, tapi boleh mengandung angka

// $nama = 'Refsi Ganteng';

// echo "Halo, Nama Saya $nama";

// Operator
// Aritmatika

// + - * / %
// $l = 10;
// $p = 12;
// echo $l * $p;

// Penggabung String / Concatenation / Concat
// . titik
// $nama_depan = "Refsi";
// $nama_belakang = "Maulana";

// echo $nama_depan . " " . $nama_belakang;

// Operator Assignment
// =, +=, -=, /=, .=

// $x = 1;
// $x += 5;

// echo $x;

// $nama = "Refsi";
// $nama .= " ";
// $nama .= "Maulana";

// echo $nama;

// Perbandingan
// <, >,  <=, >=, ==, !=

// var_dump (1<5);

// Identitas
// ===, !==

// var_dump(1 === "1");

// Logika
// &&,  ||, !
$x = 50;

var_dump($x < 20 || $x % 2 == 0);
