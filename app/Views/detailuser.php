<?php echo $this->extend('layout/main'); ?>

<?php echo $this->section('container'); ?>
<main style="margin-top: 58px">
    <div class="container pt-4">
        <section class="mb-4">
            <div class="card">
                <div class="card-header py-3">
                    <h5 class="mb-0 text-center"><strong><?php echo $user['nama'] ?></strong></h5>
                </div>
                <div class="card-body">
                    <ul>
                        <li>Alamat : <?php echo $user['alamat'] ?></li>
                        <li>TTL : <?php echo $user['tempat_lahir'] . ", " . $user['tanggal_lahir'] ?></li>
                        <li>Telepon : <?php echo $user['telepon'] ?></li>
                        <li>JK : <?php echo $user['jenis_kelamin'] ?></li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- Section: Main chart -->
    </div>
</main>
<?php echo $this->endSection(); ?>