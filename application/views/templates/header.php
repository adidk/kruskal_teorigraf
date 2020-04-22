<!doctype html>
<html lang="en">

<head>
    <title><?= $judul ?></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link href="<?= base_url() ?>assets/fontawesome/css/all.min.css" rel="stylesheet" type="text/css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url() ?>home">Teori Graf</a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item <?php if ($judul == 'Algoritma Prim') {
                                            echo 'active';
                                        } ?>">
                        <a class="nav-link" href="<?= base_url() ?>algoritmaprim">Algoritma Prim</a>
                    </li>
                    <li class="nav-item <?php if ($judul == 'Algoritma Kruskal') {
                                            echo 'active';
                                        } ?>">
                        <a class="nav-link" href="<?= base_url() ?>algoritmakruskal">Algoritma Kruskal</a>
                    </li>
                    <li class="nav-item <?php if ($judul == 'Hitung Matriks') {
                                            echo 'active';
                                        } ?>">
                        <a class="nav-link" href="<?= base_url() ?>kruskal">Hitung Matriks</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>