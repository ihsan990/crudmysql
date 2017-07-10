<?php
 /*
 

 Nama Database yang telah dibuat bernama "db_android" 
 Jika database yang kalian buat tidak sama dengan yang dibuat oleh penulis maka ganti nama database 
 sesuai dengan nama database yang kalian buat
 */
 
 //Mendefinisikan Konstanta
 define('HOST','localhost');
 define('USER','id2141060_ihsan');
 define('PASS','punisher990');
 define('DB','id2141060_mahasiswa');
 
 //membuat koneksi dengan database
 $con = mysqli_connect(HOST,USER,PASS,DB) or die('Koneksi Gagal');
 ?>