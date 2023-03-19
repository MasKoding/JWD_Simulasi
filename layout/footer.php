<div class="container-fluid mt-5 w-auto">
    <div class="row">
        <div class="col-12">
            <div class="card  bg-dark bg-custom">
                <div class="card-body">
                    <div class="row d-flex justify-content-between">
                        <div class="col-md-4 ps-4">
                            <h5 class="text-light">Beasiswa</h5>
                            <p class="text-light">Beasiswa – Adalah Situs Pemesanan Hotel
                                <?= COPYRIGHT ?> by <?= AUTHOR ?>. All Rights Reserved. Powered by Visual Studio Code</p>

                        </div>
                        <div class="col-md-4 ps-4 justify-content-center">
                            <div class="row">
                                <h5 class="text-light">Beasiswa</h5>

                                <a class="text-light d-block" href="#">Akademik</a>
                                <a class="text-light d-block" href="#">Non Akademik</a>

                            </div>



                        </div>
                        <div class="col-md-4">
                            <div class="row">
                                <h5 class="text-light d-block" href="#">UUFBI</h5>
                                <a class="text-light d-block" href="#">Syarat & ketentuan</a>
                                <a class="text-light d-block" href="#">Contact Us</a>
                                x
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

<script type="text/javascript">
    $('#registrasi_beasiswa').click(function() {
        // deklarasi konstanta jika tidak menggunakan tabel mahasiswa
        const IPK_DIATAS3 = 3.4
        const IPK_DIBAWAH3 = 2.9

        // deklarasi nama variabel
        var nama = $('#nama').val()



// memanggil library ajax untuk memanggil kode php dan mengembalikannya dalam bentuk JSON
        $.ajax({
            url: 'api/getMahasiswa.php',
            type: 'POST',
            dataType: 'json',
            data: {
                nama: nama
            },
            success: function(resp) {
                // debug untuk console log
                console.log('resp:', resp)

                // kondisi jika gagal atau berhasil
                if (resp.message == "failed") {
                    alert('Data tidak ditemukan');
                } else {
                    // kondisi untuk IPK diatas 3 atau dibawah 3
                    if (resp.data.ipk_terakhir >= 3) {
                        //isi semua value dari data JSON
                        $('#ipk_terakhir').val(resp.data.ipk_terakhir)

                        $('#semester').val(resp.data.semester)
// selection terpilih dari tabel
                        $('#semester').attr('selected', true)
//                       tombol menjadi aktif
                        $('#daftar').attr('disabled', false)
                        $('#pilihan_beasiswa').attr('disabled', false)
                        $('#berkas').attr('disabled', false)
                    } else {
                        $('#ipk_terakhir').val(resp.data.ipk_terakhir)

                        // tombol tidak aktif
                        $('#pilihan_beasiswa').attr('disabled', true)
                        $('#berkas').attr('disabled', true)
                        $('#daftar').attr('disabled', true)
                    }


                }
            }

        })

        //fungsi untuk mengecek data dengan nama yang sama apakah sudah masuk ke tabel beasiswa atau
// validasi agar nama yang di masukkan unique
        $.ajax({
            url: 'api/checkDataBeasiswa.php',
            type: 'POST',
            dataType: 'json',
            data: {
                nama: nama
            },
            success: function(resp) {
                console.log('resp:', resp)
                if (resp.message == 'failed') {
                    alert('Data dengan nama:' + nama + " Sudah Terdaftar di Data Beasiswa")

                    $('#pilihan_beasiswa').attr('disabled', true)
                    $('#berkas').attr('disabled', true)
                    $('#daftar').attr('disabled', true)

                }
            }

        })



    })

    //  check email valid atau tidak
    function isEmail(email) {
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        return regex.test(email);
    }
</script>

</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="js/script.js" type="text/javascript"></script>
</body>

</html>