<?php echo $this->extend('layout/main'); ?>

<?php echo $this->section('container'); ?>
<main style="margin-top: 58px">
    <div class="container pt-4">
        <section class="mb-4">
            <div class="card">
                <div class="card-header py-3">
                    <h5 class="mb-0 text-center"><strong>Daftar Buku</strong></h5>
                </div>
                <div class="card-body">
                   <?= $output; ?>
                </div>
            </div>
        </section>
        <!-- Section: Main chart -->
    </div>
</main>
<?php echo $this->endSection(); ?>