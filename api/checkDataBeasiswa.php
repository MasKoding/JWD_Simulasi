<?php 

     require_once '../function.php';

     $data = $_POST;
     $nama = $data['nama'];

    //  ambil dari fungsi untuk menampilkan data pada tabel beasiswa berdasarkan nama
     $result = getBeasiswaByNama($nama);

     $respon['data'] = [];
     $respon['message']='';
     $message = '';
        
     // kondisi jika data nya  ada atau kosong
     if($result->num_rows == 0){
        $message = 'success';
        $respon['message'] = $message;
     }else{
        $message = 'failed';
        $respon['message'] = $message;
     }
     

     
     echo json_encode($respon);


?>