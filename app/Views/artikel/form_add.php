<?= view('template/admin_header'); ?>
<h2><?= $title; ?></h2>
<?php if (session()->getFlashdata('error')): ?>
    <div class="alert alert-danger"><?= session()->getFlashdata('error'); ?></div>
<?php endif; ?>

<?php if (isset($validation)): ?>
    <div class="alert alert-danger"><?= $validation->listErrors(); ?></div>
<?php endif; ?>

<form action="" method="post" enctype="multipart/form-data">
    <p>
        <label for="judul">Judul</label>
        <input type="text" name="judul" id="judul" required>
    </p>
    <p>
        <label for="isi">Isi</label>
        <textarea name="isi" id="isi" cols="50" rows="10"></textarea>
    </p>
    <p>
        <input type="file" name="gambar">
    </p>
    <p>
        <label for="id_kategori">Kategori</label>
        <select name="id_kategori" id="id_kategori" required>
            <option value="">--Pilih Kategori--</option>
            <?php foreach ($kategori as $k): ?>
                <option value="<?= $k['id_kategori']; ?>"><?= $k['nama_kategori']; ?></option>
            <?php endforeach; ?>
        </select>
    </p>
    <p><input type="submit" value="Kirim" class="btn btn-large"></p>
    <?php if (isset($validation)): ?>
        <div class="alert alert-danger">
            <?= $validation->listErrors(); ?>
        </div>
    <?php endif; ?>


</form>
<?= view('template/admin_footer'); ?>