<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- BOOTSTRAP 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- ICON -->
    <link rel="icon" href="<?= site_url('public/assets/images/cafe-favicon') ?> " type="image/x-icon">

    <link rel="stylesheet" href=" <?= site_url('public/assets/css/cards') ?> ">
    <link rel="stylesheet" href=" <?= site_url('public/assets/css/navbar') ?> ">

    <title><?= $titleHome ?></title>

</head>

<style>
    /* NAVBAR */

    .navbar {
        background-color: transparent !important;
        background-color: rgba(0, 0, 0, 0.5) !important;
        backdrop-filter: blur(10px) !important;
    }

    header {
        background-image: url("https://coopercam.com.br/wp-content/uploads/2022/06/cafe-2-1920x1080.jpg");
        height: 100vh;
        min-height: 400px;
        background-size: cover;
    }

    .navbar-light .navbar-nav .nav-link {
        color: #fff;
        font-size: 18px;
    }

    .navbar-light .navbar-nav .nav-link:hover {
        color: #006135;
    }

    .nav-link {
        transition: all 0.3s;
    }

    .navbar-light .navbar-brand {
        color: #fff;
        font-size: 30px;
    }


    /* CARDS */
    .card .icon {
        color: #006135;
        font-size: 2rem;
    }

    .card .card-text {
        color: #666666;
    }

    .card:hover {
        background-color: #006135;
        color: #ffffff;
    }

    .card:hover .icon,
    .card:hover .card-text {
        color: #ffffff;
    }

    .card {
        transition: all 0.3s;
    }
</style>

<body>