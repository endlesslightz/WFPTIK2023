<div class="modal fade" id="tambahmodal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel">Tambah User</h5>
                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form id="form" action="/user/insert/" method="post" enctype="multipart/form-data">

                    <?= csrf_field(); ?>
                    <div class="row mb-4">
                        <div class="col">
                            <label class="form-label" for="nd">Nama depan</label>
                            <input type="text" id="nd" name="nama_depan" class="form-control" />
                            <div class="invalid-feedback" id="errornd"></div>
                        </div>
                        <div class="col">
                            <label class="form-label" for="nb">Nama belakang</label>
                            <input type="text" id="nb" name="nama_belakang" class="form-control" />

                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="form-label" for="al">Alamat Rumah</label>
                        <textarea class="form-control" name="alamat" id="al" rows="4"></textarea>
                    </div>
                    <div class="row mb-4">

                        <div class="col">
                            <label class="form-label" for="tempatlahir">Tempat Lahir</label>
                            <input type="text" id="tempatlahir" name="tempat_lahir" class="form-control"  />
                        </div>
                        <div class="col">
                            <label class="form-label" for="tanggallahir">Tanggal Lahir</label>
                            <input type="date" id="tanggallahir" name="tanggal_lahir" class="form-control"  />


                        </div>
                    </div>

                    Jenis Kelamin : <div class="form-check form-check-inline mb-4 mx-3">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="flexRadioDefault1" value="laki-laki" />
                        <label class="form-check-label" for="flexRadioDefault1"> Laki-laki </label>
                    </div>
                    <div class="form-check form-check-inline mb-4 mx-3">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="flexRadioDefault2" value="perempuan"  />
                        <label class="form-check-label" for="flexRadioDefault2"> Perempuan </label>
                    </div>
                    <div class=" mb-4">
                        <label class="form-label" for="tel">Telepon</label>
                        <input type="text" id="tel" name="telepon" class="form-control" />
                    </div>

                    <div class=" mb-4">
                        <label class="form-label" for="em">Email</label>
                        <input type="email" id="em" name="email" class="form-control" />
                    </div>

                         <!-- otentikasi input -->
                         <div class="mb-4">
                         <label class="form-label" for="uname">Username</label>
                         <input type="text" id="uname" class="form-control" name="username" />
                         <div class="invalid-feedback" id="erroruname"></div>
                        </div>

                        <div class="row mb-4">
                        <div class="col">
                            <label class="form-label" for="pass">Password</label>
                            <input type="password" id="pass" class="form-control" name="password" />
                         <div class="invalid-feedback" id="errorpass"></div>
                        </div>

                         <div class="col">
                            <label class="form-label" for="upass">Ulangi Password</label>
                            <input type="password" id="upass" class="form-control" name="upassword" />
                         <div class="invalid-feedback" id="errorupass"></div>
                        </div>
                        </div>


                    Avatar : <div class="form-outline mb-4">
                        <input type="file" id="ava" name="avatar" class="form-control" />
                    </div>
                    <button type="submit" id="submit" class="btn btn-primary mb-4">Tambah Data</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#form').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type:$(this).attr('method'),
            url:$(this).attr('action'),
            data: new FormData(this),
            contentType: false,
            processData: false,
            success: function(response) { 
                if (response.error) {
                        if (response.error.namadepan) {
                            $('#nd').addClass('is-invalid');
                            $('#errornd').html(response.error.namadepan);
                        } else {
                            $('#nd').removeClass('is-invalid');
                            $('#errornd').html('');
                        }

                        if (response.error.namabelakang) {
                            $('#nb').addClass('is-invalid');
                            $('#errornb').html(response.error.namabelakang);
                        } else {
                            $('#nb').removeClass('is-invalid');
                            $('#errornb').html('');
                        }


                        if (response.error.username) {
                            $('#uname').addClass('is-invalid');
                            $('#erroruname').html(response.error.username);
                        } else {
                            $('#uname').removeClass('is-invalid');
                            $('#erroruname').html('');
                        }
                        
                        if (response.error.password) {
                            $('#pass').addClass('is-invalid');
                            $('#errorpass').html(response.error.password);
                        } else {
                            $('#pass').removeClass('is-invalid');
                            $('#errorpass').html('');
                        }
                        
                        if (response.error.upassword) {
                            $('#upass').addClass('is-invalid');
                            $('#errorupass').html(response.error.upassword);
                        } else {
                            $('#upass').removeClass('is-invalid');
                            $('#errorupass').html('');
                        }

                    } else {
                        Swal.fire({
                        title: 'Berhasil!',
                        text: response.sukses,
                        icon: 'success',
                        confirmButtonText: 'Ok'
                    })
                    $('#tambahmodal').modal('hide');
                    tampilData();
                }
            }
        });

    }); 
    });
</script>