<?php

/** @var CodeIgniter\View\View $this */
?>
<?= $this->extend('layout/main') ?>
<article class="entry">
    <h2>
        <?= $artikel['judul']; ?>
    </h2>
    <img src="<?= base_url('gambar/' . $artikel['gambar']); ?>" alt="<?=$artikel['judul']; ?>">
    <p>
        <?= $artikel['isi']; ?>
    </p>
</article>
