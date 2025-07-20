<?php

/** @var CodeIgniter\View\View $this */
?>
<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>

<form method="get" class="mb-3">
    <label for="kategori">Pilih Kategori:</label>
    <select name="kategori_id" id="kategori" class="form-control d-inline w-auto">
        <option value="">Semua Kategori</option>
        <?php foreach ($kategori as $k): ?>
            <option value="<?= $k['id_kategori']; ?>" <?= ($kategori_id == $k['id_kategori']) ? 'selected' : ''; ?>>
                <?= $k['nama_kategori']; ?>
            </option>
        <?php endforeach; ?>
    </select>
    <button type="submit" class="btn btn-primary btn-sm">Filter</button>
</form>

<?php if ($artikel): foreach ($artikel as $row): ?>
        <article class="entry">
            <h2>
                <a href="<?= base_url('artikel/' . $row['slug']); ?>"><?= $row['judul']; ?></a>
            </h2>
            <p>Kategori: <?= $row['nama_kategori'] ?></p>
            <img src="<?= base_url('gambar/' . $row['gambar']); ?>" alt="<?= $row['judul']; ?>" width="300">
            <p><?= substr($row['isi'], 0, 200); ?></p>
        </article>
        <hr class="divider" />
    <?php endforeach;
else: ?>
    <article class="entry">
        <h2>Belum ada data.</h2>
    </article>
<?php endif; ?>

<?= $this->endSection() ?>