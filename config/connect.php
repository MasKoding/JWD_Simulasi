<?php 
    // deklarasi konstanta DB_VERSION
    define('DB_VERSION','1.0.0');

     // initialisasi variabel untuk koneksi database
     $host = 'localhost';
     $user = 'root';
     $pass = 'root';
     $port = 3306;
     $socket='/Applications/MAMP/tmp/mysql/mysql.sock';
     $dbName = 'jwd_simulasi';
     // buat koneksi ke database dengan variabel connect 
     $connect = new mysqli($host,$user,$pass,$dbName,$port,$socket);
     // untuk menampilkan pesan error jika ada error
     if($connect->error){
         echo "Error connection: {$connect->error}";
     }


?>