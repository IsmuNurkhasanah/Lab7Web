<!-- Modal tambah artikel -->
<div id="formModal" class="modal">
    <div class="modal-content">
        <span class="close-btn" id="btnCloseModal">&times;</span>
        <h2>Tambah Artikel</h2>

        <form id="artikelForm" method="post" enctype="multipart/form-data">
            <p>
                <label for="judul">Judul</label>
                <input type="text" name="judul" id="judul" required>
            </p>
            <p>
                <label for="isi">Isi</label>
                <textarea name="isi" id="isi" cols="50" rows="10"></textarea>
            </p>
            <p>
                <label for="gambar">Gambar</label>
                <input type="file" name="gambar" id="gambar">
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
            <button type="submit">Simpan</button>
            <button type="button" id="btnCloseModal">Batal</button>
        </form>
    </div>
</div>