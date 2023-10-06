<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Material Design for Bootstrap</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href=<?php echo base_url('css/mdb.min.css'); ?> />
    <!-- Custom styles -->
    <link rel="stylesheet" href=<?php echo base_url('css/admin.css'); ?> />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" integrity="sha512-d9xgZrVZpmmQlfonhQUvTR7lMPtO7NkZMkA0ABN3PHCbKA5nqylQ/yWlFAyY6hYgdF1Qh6nYiuADWwKB4C2WSw==" crossorigin="anonymous"></script>
</head>

<body>
    <!--Main Navigation-->
    <?php echo $this->include('layout/navigasi'); ?>
    <!--Main Navigation-->

    <!--Main layout-->
    <?php echo $this->renderSection('container'); ?>
    <!--Main layout-->
    <!-- MDB -->
    <script type="text/javascript" src=<?php echo base_url('js/mdb.min.js') ?>></script>
    <!-- Custom scripts -->
    <script type="text/javascript" src=<?php echo base_url('js/admin.js') ?>></script>

</body>

</html>