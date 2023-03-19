<?php 
// memanggil file koneksi dan fungsi
     require_once '../config/connect.php';
     require_once '../function.php';

     $data = $_POST;
     $nama = $data['nama'];

     // memanggil fungsi untuk menampilkan data mahasiswa berdasarkan nama
     $result = getMahasiswa($nama);

     $respon['data'] = [];
     $respon['message']='';
     $message = '';
// kondisi jika data nya kosong atau ada
     if($result->num_rows == 0){
        $message = 'failed';
        $respon['message'] = $message;
     }else{
        $message = 'success';
        $row = mysqli_fetch_assoc($result);
        $respon['data'] = $row;
        $respon['message'] = $message;
     }
     

     
     echo json_encode($respon);


?>