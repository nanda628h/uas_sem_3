<?php ob_start(); ?>
<div class="card p-4 col-md-6 mx-auto">
<h4 class="mb-3">Tambah Buku</h4>
<form method="post" action="store">
<input class="form-control mb-2" name="judul" placeholder="Judul">
<input class="form-control mb-2" name="penulis" placeholder="Penulis">
<input class="form-control mb-2" name="penerbit" placeholder="Penerbit">
<input class="form-control mb-3" name="tahun" placeholder="Tahun">
<button class="btn btn-success">Simpan</button>
<a href="../buku" class="btn btn-secondary">Kembali</a>
</form>
</div>
<?php $content = ob_get_clean(); require 'views/layouts/main.php'; ?>
