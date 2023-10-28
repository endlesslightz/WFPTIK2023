<div class="modal fade" id="formmodal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel">Tambah User</h5>
                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form id="form" action="insertuser" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                        <!-- 2 column grid layout with text inputs for the first and last names -->
                        <div class="row mb-4">
                            <div class="col">
                                <div class="form-outline">
                                    <input type="text" id="nd" class="form-control" name="nama_depan" />
                                    <label class="form-label" for="nd">First name</label>
                                    <div class="invalid-feedback" id="errornd"></div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-outline">
                                    <input type="text" id="nb" class="form-control" name="nama_belakang" />
                                    <label class="form-label" for="nb">Last name</label>
                                    <div class="invalid-feedback" id="errornb"></div>
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
    </div>
</div>