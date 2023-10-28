<?php echo $this->extend('layout/main'); ?>

<?php echo $this->section('container'); ?>
<main style="margin-top: 58px">
    <div class="container pt-4">
        <div id="viewmodal">
            <?php echo $this->include('user/form'); ?>
        </div>
        <section class="mb-4">
            <div class="card">
                <div class="card-header py-3">
                    <h5 class="mb-0 text-center"><strong>Halaman User</strong></h5>
                </div>
                <div class="card-body">
                    <a href="#" id="tambah" class="btn btn-success mb-4">Tambah Data</a>
                    <div id="viewdata"></div>
                </div>
            </div>
        </section>
        <!-- Section: Main chart -->
    </div>
</main>


<script>
        function tampilData() {
            $.ajax({
                url:"<?= base_url('/getdata') ?>",
                dataType: "json",
                success: function(response) {
                    $('#viewdata').html('');
                    $('#viewdata').html(response.data);
                }
            });
        }

        $(document).ready(function() {
            tampilData();

            
    $('#tambah').click(function(e) {
            e.preventDefault();
            $('#formmodal').modal('show');
        });

    $('#formmodal').on('hidden.bs.modal', function (e) {
        $('#form').find("input[type=text],input[type=date], textarea").val("");
    })

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
                    } else {
                    alert(response.sukses);
                    $('#formmodal').modal('hide');
                    tampilData();
                }
            }
        });

    }); 
        });
    </script> 
<?php echo $this->endSection(); ?>