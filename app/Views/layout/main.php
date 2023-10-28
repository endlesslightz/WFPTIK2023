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

    <?php if($menu== 'halUser') { ?>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
        <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
        <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <?php } ?>
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
</body>

</html>