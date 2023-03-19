<?php 

    /*
    *  merapihkan fungsi 
    * @author :
    * @version : 1.0.0
    * @copyright: 2023
    */
    require_once 'config/connect.php';

    function getBodyFromPage($page){
    // memanggil file layout/header.php
        require_once 'layout/header.php';
        // memanggil file file connect.php
       
        
        switch ($page) {
            case 'home':
                // require_once untuk memanggil file php
                require_once 'pages/home.php';
                break;
            case 'daftar':
                    // require_once untuk memanggil file php
                    require_once 'pages/daftar.php';
                    break;   
            case 'hasil':
                // require_once untuk memanggil file php
                require_once 'pages/hasil.php';
                break;   
            case 'detail':
                // require_once untuk memanggil file php
                require_once 'pages/detail.php';
                break;   
            default:
                require_once 'pages/404.php';
            break;
        }

        require_once "layout/footer.php";

     }

     function getStatusActivity($page,$destination){
    
            return ($page == $destination)? 'active':'';
      }

    
      function getPilihanBeasiswa(){
        // mengambil variabel connect dengan global agar variabel dapat digunakan di dalam fungsi lokal
        global $connect;
        $result = $connect->query("SELECT * FROM pilihan_beasiswa");
      
        return $result;
    }

      function getMahasiswa($nama){
        // mengambil variabel connect dengan global agar variabel dapat digunakan di dalam fungsi lokal
        global $connect;
        $result =  $connect->query("SELECT * FROM mahasiswa WHERE nama_mahasiswa='$nama'");
      
        return $result;
    }

    function getBeasiswaByNama($nama){
        // mengambil variabel connect dengan global agar variabel dapat digunakan di dalam fungsi lokal
        global $connect;
        $result =  $connect->query("SELECT * FROM daftar_beasiswa WHERE nama='$nama'");
      
        return $result;
    }

    function getHasil($nama){
        // mengambil variabel connect dengan global agar variabel dapat digunakan di dalam fungsi lokal
        global $connect;
        $result =  $connect->query("SELECT db.*,pb.kategori FROM daftar_beasiswa db INNER JOIN pilihan_beasiswa  pb ON db.pilihan_beasiswa = pb.id  WHERE db.nama='$nama'");
      
        return $result;
    }


    function getPilihanBeasiswaById($id){
        // mengambil variabel connect dengan global agar variabel dapat digunakan di dalam fungsi lokal
        global $connect;
        $result = $connect->query("SELECT * FROM pilihan_beasiswa WHERE id='$id'");
      
        return $result;
    }



?>