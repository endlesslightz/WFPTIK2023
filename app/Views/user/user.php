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
                    <a href="/createuser" class="btn btn-success">Tambah Data</a>
                    <table class="table">
                        <tr>
                            <th>No</th>
                            <th>Avatar</th>
                            <th>Nama</th>
                            <th>Avatar</th>
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
                                <td><img src="/ava/<?php echo $u['avatar'] ?>" width="100px"></td>
                                <td><?php echo $u['nama'] ?></td>
                                <td><img src="/img/<?php echo $u['avatar'] ?>" width="100px"></td>
                                <td><?php echo $u['alamat'] ?></td>
                                <td><?php echo $u['tempat_lahir'] . ", " . $u['tanggal_lahir'] ?></td>
                                <td><?php echo $u['telepon'] ?></td>
                                <td><a href="<?php echo "/user/" . $u['id']; ?>"><button class="btn btn-primary"> Detail</button></a></td>
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