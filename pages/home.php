<div class="container">
    <?php
    // fungsi ini untuk menampilkan data pilihan beasiswa 
    $result = getPilihanBeasiswa();
    ?>
    <div class="row">
        <?php
        if ($result->num_rows > 0) :
            foreach ($result as $r) :
        ?>
                <div class="col-lg-6 mt-4">
                    <div class="card">
                        <!-- panggil kontanta dengan huruf KAPITAL : SRC_URL -->
                        <a href="#"><img src="<?=SRC_URL?>/image/<?= $r['image'] ?>" class="card-img-top"></a>

                        <div class="card-img-overlay">
                            <div class="card-bg-title text-center pb-3">
                                <h5 class="card-title p-4 text-dark">Beasiswa <?= $r['kategori'] ?></h5>
                                <a href="index.php?page=detail&id=<?=$r['id']?>" class="btn btn-success">Ketentuan & Syarat</a>
                            </div>
                        </div>

                    </div>
                </div>
        <?php
            endforeach;
        endif;
        ?>
    </div>
</div>