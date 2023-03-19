<?php 
        require_once '../config/connect.php';
        require_once '../constant.php';

        if (isset($_POST['submit'])) {

           $nama = $_POST['nama'];
           $email = $_POST['email'];
           $noHp = $_POST['no_hp'];
           $semester = $_POST['semester'];
           $ipkTerakhir = (float) $_POST['ipk_terakhir'];
           $pilihanBeasiswa = $_POST['pilihan_beasiswa'];
           $statusAjuan = 'belum verifikasi';
          
           $berkasFileName = $_FILES['berkas_file']['name'];
           $berkasFileTmp = $_FILES['berkas_file']['tmp_name'];

        //    move upload file yaitu memindahkan file dari server ke folder image
           move_uploaded_file($berkasFileTmp,SRC_URL_UPLOAD.'/image/'.$berkasFileName);
         
           //query insert 
           $query = $connect->query("INSERT INTO daftar_beasiswa(nama,email,no_hp,semester,ipk_terakhir,pilihan_beasiswa,berkas_file,status_ajuan)
             VALUES ('$nama','$email','$noHp','$semester','$ipkTerakhir',
             '$pilihanBeasiswa','$berkasFileTmp','$statusAjuan')");
           
           
           if($query){
                echo "<script>
                    alert('Berhasil Submit');
                    window.location.href='/jwd_simulasi/index.php?page=hasil&nama=".$nama."'
                </script>";
            }else{
                echo "<script>
                    alert('Gagal Submit');
                    window.location.href='/jwd_simulasi/index.php?page=daftar'
                    </script>";
            }

        }

?>