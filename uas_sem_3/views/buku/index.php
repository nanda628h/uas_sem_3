<?php ob_start(); ?>

<div class="mb-4">
    <h4 class="fw-semibold mb-1">Data Buku</h4>
    <small class="text-muted">Manajemen data buku perpustakaan</small>
</div>

<div class="row align-items-center mb-3">
    <div class="col-md-8">
        <form method="get" action="" class="d-flex">
            <input type="text"
                   name="search"
                   class="form-control me-2"
                   placeholder="Cari judul buku"
                   value="<?= htmlspecialchars($search) ?>">
            <button class="btn btn-primary">Cari</button>
        </form>
    </div>

    <?php if ($_SESSION['user']['role'] === 'admin'): ?>
    <div class="col-md-4 text-end">
        <a href="buku/create" class="btn btn-success">Tambah Buku</a>
    </div>
    <?php endif; ?>
</div>

<div class="card p-3">
<table class="table table-hover align-middle mb-0">
<thead>
<tr>
    <th>Judul</th>
    <th>Penulis</th>
    <th>Penerbit</th>
    <th>Tahun</th>
    <?php if ($_SESSION['user']['role'] === 'admin'): ?>
    <th class="text-center">Aksi</th>
    <?php endif; ?>
</tr>
</thead>
<tbody>
<?php if (count($data) == 0): ?>
<tr>
    <td colspan="5" class="text-center text-muted">Data tidak ditemukan</td>
</tr>
<?php endif; ?>

<?php foreach ($data as $b): ?>
<tr>
    <td class="fw-medium"><?= $b['judul'] ?></td>
    <td><?= $b['penulis'] ?></td>
    <td><?= $b['penerbit'] ?></td>
    <td><?= $b['tahun'] ?></td>
    <?php if ($_SESSION['user']['role'] === 'admin'): ?>
    <td class="text-center">
        <a href="buku/edit/<?= $b['id'] ?>" class="btn btn-sm btn-warning">Edit</a>
        <a href="buku/delete/<?= $b['id'] ?>"
           class="btn btn-sm btn-danger"
           onclick="return confirm('Hapus data buku ini?')">
           Hapus
        </a>
    </td>
    <?php endif; ?>
</tr>
<?php endforeach; ?>
</tbody>
</table>
</div>

<?php
$totalPage = ceil($total / 5);
if ($totalPage > 1):
?>
<nav class="mt-3">
<ul class="pagination pagination-sm">
<?php for ($i = 1; $i <= $totalPage; $i++): ?>
<li class="page-item <?= ($i == ($page ?? 1)) ? 'active' : '' ?>">
    <a class="page-link"
       href="?page=<?= $i ?>&search=<?= urlencode($search) ?>">
       <?= $i ?>
    </a>
</li>
<?php endfor; ?>
</ul>
</nav>
<?php endif; ?>

<?php
$content = ob_get_clean();
require 'views/layouts/main.php';
?>
