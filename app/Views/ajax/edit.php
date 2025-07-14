<!-- Modal Edit Artikel -->
<div id="modalEdit" style="display:none;">
    <form id="formEdit" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" id="edit-id">
        <h2>Edit Artikel</h2>

        <p>
            <label for="edit-judul">Judul</label>
            <input type="text" name="judul" id="edit-judul" required>
        </p>

        <p>
            <label for="edit-isi">Isi</label>
            <textarea name="isi" id="edit-isi" cols="50" rows="10"></textarea>
        </p>

        <p>
            <div id="preview-gambar"></div>
            <input type="hidden" name="gambar_lama" id="gambar_lama">
            <input type="file" name="gambar">
        </p>

        <p>
            <label for="edit-id_kategori">Kategori</label>
            <select name="id_kategori" id="edit-id_kategori" required>
                <option value="">--Pilih Kategori--</option>
                <?php foreach ($kategori as $k): ?>
                    <option value="<?= $k['id_kategori']; ?>"><?= $k['nama_kategori']; ?></option>
                <?php endforeach; ?>
            </select>
        </p>

        <button type="submit" class="btn btn-simpan">Update</button>
        <button type="button" class="btnCloseEditModal btn btn-batal">Batal</button>
    </form>
</div>
