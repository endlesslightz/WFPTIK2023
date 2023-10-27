<?php echo $this->extend('layout/main'); ?>

<?php echo $this->section('container'); ?>
<main style="margin-top: 58px">
    <div class="container pt-4">
        <section class="mb-4">
            <div class="card">
                <div class="card-header py-3">
                    <h5 class="mb-0 text-center"><strong>Tambah User</strong></h5>
                </div>
                <div class="card-body">

                    <form method="POST" action="/insertuser" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <!-- 2 column grid layout with text inputs for the first and last names -->
                        <div class="row mb-4">
                            <div class="col">
                                <div class="form-outline">
                                    <input type="text" id="form6Example1" class="form-control" name="nama_depan" />
                                    <label class="form-label" for="form6Example1">First name</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-outline">
                                    <input type="text" id="form6Example2" class="form-control" name="nama_belakang" />
                                    <label class="form-label" for="form6Example2">Last name</label>
                                </div>
                            </div>
                        </div>

                        <!-- Text input -->
                        <div class="form-outline mb-4">
                            <input type="text" id="form6Example3" class="form-control" name="tempat_lahir" />
                            <label class="form-label" for="form6Example3">Tempat lahir</label>
                        </div>

                        <!-- Text input -->
                        <div class="form-outline mb-4">
                            <input type="date" id="form6Example3" class="form-control" name="tanggal_lahir" />
                            <label class="form-label" for="form6Example3">Tanggal lahir</label>
                        </div>

                        <!-- Text input -->
                        <div class="form-outline mb-4">
                            <input type="text" id="form6Example4" class="form-control" name="alamat" />
                            <label class="form-label" for="form6Example4">Alamat</label>
                        </div>

                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input type="email" id="form6Example5" class="form-control" name="email" />
                            <label class="form-label" for="form6Example5">Email</label>
                        </div>

                        <!-- Number input -->
                        <div class="form-outline mb-4">
                            <input type="number" id="form6Example6" class="form-control" name="telepon" />
                            <label class="form-label" for="form6Example6">Telepon</label>
                        </div>


                        <div class="form-outline mb-4">
                            <input type="file" id="form6Example6" class="form-control" name="avatar" />
                            <label class="form-label" for="form6Example6">Avatar</label>
                        </div>



                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary btn-block mb-4">Tambah Data</button>
                    </form>



                </div>
            </div>
        </section>
        <!-- Section: Main chart -->
    </div>
</main>
<?php echo $this->endSection(); ?>