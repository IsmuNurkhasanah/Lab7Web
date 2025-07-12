<head>
    <link rel="stylesheet" href="<?= base_url('style_detail.css'); ?>">
</head>

<body>
    <article class="entry">
        <a href="<?= base_url('/artikel'); ?>">Back</a>
        <h2><?= $artikel['judul']; ?></h2>
        <img src="<?= base_url('gambar/' . $artikel['gambar']); ?>" alt="<?= $artikel['judul']; ?>" style="width: 50%;">
        <p style="text-align: center;"><strong>Kategori:</strong> <?= esc($nama_kategori); ?></p>
        <p><?= $artikel['isi']; ?></p>
    </article>

</body>