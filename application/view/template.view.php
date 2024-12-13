<?php
<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0", shrink-to-fit="no">
    <title>Aplikasi Manajemen Pegawai</title>
    <link href="<?= BASE PATH?>/public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= BASE PATH?>/public/open-iconic/css/open-iconic-bootstrap.min.css" rel="stylesheet">

    <script src="<?= BASE PATH?>/public/js/jquery-3.3.1.min.js"></script>
</head>
<body class="h-100">
    <nav class="navbar navbar-expand-sm navbar-dark sticky-top bg-info"></nav>
        <a class="navbar-brand" href="#">Manajemen Pegawai</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidebar" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <nav class="collapse navbar-collapse" id="sidebar">

<ul class="navbar-nav d-sm-none">
    <li class="nav-item">
    <a class="nav-link text-white" href="<? BASE PATH?>/dashboard">
    <i class="oi oi-dashboard"></i> Dashboard
    </a>
    </li>
    <li class="nav-item">
    <a class="nav-link text-white" href="<? BASE PATH?>/pegawai">
    <i class="oi oi-person"></i> Data Pegawai
    </a>
    </li>
    <li class="nav-item">
    <a class="nav-link text-white" href="<? BASE PATH?>/jabatan">
    <i class="oi oi-sort-descending"></i> Data Jabatan
    </a>
    </li>
    <li class="nav-item">
    <a class="nav-link text-white" href="<? BASE PATH?>/login/logout">
    <i class="oi oi-account-logout"></i> Keluar
    </a>
    </li>
</ul>
        </nav>
    </nav>

    
</body>
</html>