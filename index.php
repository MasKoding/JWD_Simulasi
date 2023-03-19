<?php 
  
  // deklarasi author dan versi
  define('AUTHOR','Nama Kamu');
  define('COPYRIGHT','&copy; 2023');

  //  memanggil file function.php menggunakan require_once
  require_once 'function.php';

  // deklarasi variabel untuk mengambil parameter pada page
  // contoh : index.php?page=home
  $page = $_GET['page'];
// untuk mendapatkan body dari parameter page
  getBodyFromPage($page);

?>