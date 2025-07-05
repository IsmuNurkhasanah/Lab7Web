<?= view('template/admin_header'); ?>

<h2><?= $title; ?></h2>
<form action="" method="post" enctype="multipart/form-data">
    <p>
        <input type="text" name="judul" value="<?= $data['judul']; ?>">
    </p>
    <p>
        <textarea name="isi" cols="50" rows="10"><?= $data['isi']; ?></textarea>
    </p>
    <p>
        <?php if (!empty($data['gambar'])): ?>
            <img src="<?= base_url('gambar/' . esc($data['gambar'])); ?>" width="100">
            <small>File: <?= esc($data['gambar']); ?></small><br>
        <?php endif; ?>
        <input type="file" name="gambar">
    </p>
    <p><input type="submit" value="Kirim" class="btn btn-large"></p>
</form>

<?= view('template/admin_footer'); ?>