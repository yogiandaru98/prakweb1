<!doctype html>
<html>

<head>
    <title>CodeIgniter Tutorial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">WEB LANJUT</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link <?= $title == "Home" ? "active" : ""?>" href=" <?= base_url()?>/home"
                            aria-current="page">Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $title == "About" ? "active" : ""?>"
                            href="<?= base_url()?>/about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $title == "Mahasiswa" ? "active" : ""?>"
                            href="<?= base_url()?>/mahasiswa">Mahasiswa</a>
                    </li>
            </div>
        </div>
    </nav>

    <h1 class="p-4"><?= esc($title) ?>
    </h1>
    <div class=" p-4">