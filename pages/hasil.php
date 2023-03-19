<?php 

//  untuk mengambil parameter nama
        $nama = $_GET['nama'];

        // untuk memanggil hasil berdasarkan nama yang sukses didaftarkan 
        $result = getHasil($nama);

        $row = mysqli_fetch_assoc($result);

?>

<div class="container">
    <div class="row mt-4 d-flex justify-content-center">
        <div class="col-lg-12">
            <h4 class="card-title-form text-center">Hasil Beasiswa</h4>
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                       
                        

                    </div>
                    <!--  ambil dari bootstrap forms layout horizontal  -->
                    <!-- untuk upload wajib tambahkan enctype= multipart/form-data-->
                    <form action="" method="post" class="bg-light p-4" enctype="multipart/form-data">
                        <!-- form nama  -->
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label"> Nama :</label>
                            <div class="col-sm-10">
                              <label for=""><?=$row['nama']?></label>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label"> Email :</label>
                            <div class="col-sm-10">
                            <label for=""><?=$row['email']?></label>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Nomor HP :</label>
                            <div class="col-sm-10">
                            <label for=""><?=$row['no_hp']?></label>
                            </div>
                        </div>

                        <!-- form semester saat ini -->
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Semester saat ini :</label>
                            <div class="col-sm-10">
                            <label for=""><?=$row['semester']?></label>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">IPK Terakhir :</label>
                            <div class="col-sm-10">
                            <label for=""><?=$row['ipk_terakhir']?></label>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Pilihan Beasiswa :</label>
                            <div class="col-sm-10">
                            <label for=""><?=$row['kategori']?></label>
                            </div>
                        </div>


                        <!-- form total bayar -->
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Upload Berkas Syarat :</label>
                            <div class="col-sm-10">
                            <?php 
                                    if($row['berkas_file']!=''){
                                        echo '<label>Done</label>';
                                    }else{
                                        echo '<label>Empty</label>';
                                    }
                            ?>
                           
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Status Ajuan : </label>
                            <div class="col-sm-10">

                              <label for=""><?=$row['status_ajuan']?></label>
                            </div>
                        </div>


                        

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>