<?php echo $this->extend('layout/main'); ?>

<?php echo $this->section('container'); ?>
<main style="margin-top: 58px">
    <div class="container pt-4">
        <section class="mb-4">
            <div class="card">
                <div class="card-header py-3">
                    <h5 class="mb-0 text-center"><strong>Nama Mahasiswa</strong></h5>
                </div>
                <div class="card-body">
                    <table class="table">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>TTL</th>
                            <th>Telepon</th>
                            <th>Aksi</th>
                        </tr>
                        <?php
                        $i = 1;
                        foreach ($user as $u) { ?>
                            <tr>
                                <td><?php echo $i++; ?></td>
                                <td><?php echo $u['nama'] ?></td>
                                <td><?php echo $u['alamat'] ?></td>
                                <td><?php echo $u['tempat_lahir'] . ", " . $u['tanggal_lahir'] ?></td>
                                <td><?php echo $u['telepon'] ?></td>
                                <td><button class="button btn-primary"><a href="<?php echo "/user/" . $u['id']; ?>"> Detail</a></button></td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </section>
        <!-- Section: Main chart -->
    </div>
</main>
<?php echo $this->endSection(); ?>