<?php ob_start(); ?>
<div class="card p-4 col-md-6 mx-auto">
<h4 class="mb-3">Edit Buku</h4>
<form method="post" action="../update/<?= $data['id'] ?>">
<input class="form-control mb-2" name="judul" value="<?= $data['judul'] ?>">
<input class="form-control mb-2" name="penulis" value="<?= $data['penulis'] ?>">
<input class="form-control mb-2" name="penerbit" value="<?= $data['penerbit'] ?>">
<input class="form-control mb-3" name="tahun" value="<?= $data['tahun'] ?>">
<button class="btn btn-primary">Update</button>
<a href="../../buku" class="btn btn-secondary">Kembali</a>
</form>
</div>
<?php $content = ob_get_clean(); require 'views/layouts/main.php'; ?>
