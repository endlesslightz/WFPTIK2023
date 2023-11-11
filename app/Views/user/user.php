<?php echo $this->extend('layout/main'); ?>

<?php echo $this->section('container'); ?>
<main style="margin-top: 58px">
    <div class="container pt-4">
        
        <div id="viewmodal">
        <!-- diisi dengan modal     -->
        </div>
        <section class="mb-4">
            <div class="card">
                <div class="card-header py-3">
                    <h5 class="mb-0 text-center"><strong>Halaman User</strong></h5>
                </div>
                <div class="card-body">
                    <a href="#" onclick="tambah()" id="tambah" class="btn btn-success mb-4">Tambah Data</a>
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
                url:"<?= base_url('/user/data/') ?>",
                dataType: "json",
                success: function(response) {
                    $('#viewdata').html('');
                    $('#viewdata').html(response.data);
                }
            });
        }

    function edit(id){
        $.ajax({
            url: "<?= base_url('/user/edit/') ?>/" + id,
            dataType: "json",
            success: function (response) {
                $('#viewmodal').html(response.data).show();
                $('#editmodal').modal('show');
            }
        });
    }

    function hapus(id){
        Swal.fire({
        title: 'Hapus Data',
        text: "Apakah Anda yakin menghapus data?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, hapus'
        }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                type: "delete",
                url: "<?= base_url('/user/delete/') ?>"+id,
                success: function (response) {
                    Swal.fire({
                        title: 'Berhasil!',
                        text: response.sukses,
                        icon: 'success',
                        confirmButtonText: 'Ok'
                    })
                    tampilData();
                }
            });
        }
        })
    }

    function tambah(){
            $.ajax({
                url: "<?= base_url('/user/tambah')?>",
                dataType: "json",
                success: function(response) {
                    $('#viewmodal').html(response.data).show();
                    $('#tambahmodal').modal('show');
                }
            });

        };

    $(document).ready(function() {
        tampilData();
    
        });
    </script> 
<?php echo $this->endSection(); ?>