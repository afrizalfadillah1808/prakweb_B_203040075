<div class="container mt-5">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title text-dark"><?= $data['mhs']['nama']; ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?= $data['mhs']['npm']; ?></h6>
            <p class="card-text text-dark"><?= $data['mhs']['email']; ?></p>
            <p class="card-text  text-dark"><?= $data['mhs']['jurusan']; ?></p>
            <a href="<?= BASEURL; ?>/mahasiswa" class="card-link">Kembali</a>
        </div>
    </div>
</div>