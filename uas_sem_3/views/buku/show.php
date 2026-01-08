<?php ob_start(); ?>
<h2>Detail Buku: <?php echo htmlspecialchars($item['judul']); ?></h2>
<div class="card">
    <div class="card-body">
        <p><strong>Penulis:</strong> <?php echo htmlspecialchars($item['penulis']); ?></p>
        <p><strong>Tahun:</strong> <?php echo $item['tahun']; ?></p>
        <p><strong>Deskripsi:</strong> <?php echo nl2br(htmlspecialchars($item['deskripsi'])); ?></p>
    </div>
</div>
<a href="/project_uas/buku" class="btn btn-secondary mt-3">Kembali</a>
<?php $content = ob_get_clean(); ?>