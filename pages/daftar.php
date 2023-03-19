<div class="container">
    <div class="row mt-4 d-flex justify-content-center">
        <div class="col-lg-12">
            <h4 class="card-title-form text-center">Daftar Beasiswa</h4>
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <div class="d-grid gap-2">
                        <button class="btn btn-info text-light" id="registrasi_beasiswa">Registrasi Beasiswa</button>
                        </div>
                        

                    </div>
                    <!--  ambil dari bootstrap forms layout horizontal  -->
                    <!-- untuk upload wajib tambahkan enctype= multipart/form-data-->
                    <form action="pages/actionSubmit.php" method="post" class="bg-light p-4" enctype="multipart/form-data">
                        <!-- form nama  -->
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Masukkan Nama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama" id="nama" required="true">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Masukkan Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" name="email" id="email" required="true">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Nomor HP</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="no_hp" id="no_hp" required="true">
                            </div>
                        </div>

                        <!-- form semester saat ini -->
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Semester saat ini</label>
                            <div class="col-sm-10">
                                <select class="form-select" name="semester" id="semester" required="true">
                                    <option value="" selected>Pilih</option>
                                    <?php
                                    // data semester di isi dengan looping angka 1  -8
                                    for ($i = 1; $i <= 8; $i++) :
                                    ?>
                                        <option value="<?= $i ?>"><?= $i ?></option>
                                    <?php endfor; ?>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">IPK Terakhir</label>
                            <div class="col-sm-10">
                                <input type="text" placeholder="" class="form-control" name="ipk_terakhir" id="ipk_terakhir" required="true" readonly>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Pilihan Beasiswa</label>
                            <div class="col-sm-10">
                                <select class="form-select" name="pilihan_beasiswa" id="pilihan_beasiswa" required="true">
                                    <option value="" selected>Pilihan Beasiswa</option>
                                    <?php
                                    $result = getPilihanBeasiswa();
                                    foreach ($result as $r) :
                                    ?>
                                        <option value="<?= $r['id'] ?>"><?= $r['kategori'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>


                        <!-- form total bayar -->
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Upload Berkas Syarat</label>
                            <div class="col-sm-10">

                                <input type="file" id="berkas" name="berkas_file" class="form-control" readonly>
                            </div>
                        </div>


                        <div class="row d-flex justify-content-center mt-5">
                            <div class="col-offset-2"></div>
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-success" id="daftar" name="submit">
                                    Daftar</button>
                            </div>

                            <div class="col-md-2">
                                <button type="button" class="btn btn-danger" id="cancel">Batal</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>