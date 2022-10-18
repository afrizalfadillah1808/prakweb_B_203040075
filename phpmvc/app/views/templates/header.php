<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['judul']; ?></title>
    <link rel="stylesheet" href="http://localhost/prakweb_B_203040075/phpmvc/public/css/bootstrap.css">
    <link rel="stylesheet" href="../public/css/mycss/style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">

        <a class="navbar-brand" href="<?= BASEURL; ?>">M V C</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
            <a class="nav-item nav-link active" href="<?= BASEURL; ?>">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="<?= BASEURL; ?>/mahasiswa">Mahasiswa</a>
            <a class="nav-item nav-link" href="<?= BASEURL; ?>/about">About</a>
            </div>
        </div>
  
</nav>
