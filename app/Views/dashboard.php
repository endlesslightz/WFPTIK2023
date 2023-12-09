<?php echo $this->extend('layout/main'); ?>

<?php echo $this->section('container'); ?>
<main style="margin-top: 58px">
    <div class="container pt-4">
        <div class="alert alert-primary" role="alert">
            <h1>Selamat Datang <?= session()->get('username'); ?> di Website Perpustakaan PTIK</h1>
        </div>
        <section class="mb-4">
            <div class="card">

            </div>
        </section>
        <!-- Section: Main chart -->
    </div>
</main>
<?php echo $this->endSection(); ?>