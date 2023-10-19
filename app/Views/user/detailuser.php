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
                <div class="row">
                    <div class="col-8"> 
                        <table class="table table-bordered table-striped">
                        <tr>
                            <td>Alamat</td>
                            <td> <?php echo $user['alamat'] ?></td>
                        </tr>
                        <tr>
                            <td>TTL</td>
                            <td><?php echo $user['tempat_lahir'] . ", " . $user['tanggal_lahir'] ?></td>
                        </tr>
                        <tr>
                            <td>Telepon</td>
                            <td> <?php echo $user['telepon'] ?></td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td> <?php echo $user['jenis_kelamin'] ?></td>
                        </tr>
                        </table>
                    </>
                </div>
                <div class="col-4"><img src="/ava/<?php echo $user['avatar'] ?>" width="200px"></div>   
                </div>
                </div>
            </div>
        </section>
        <!-- Section: Main chart -->
    </div>
</main>
<?php echo $this->endSection(); ?>