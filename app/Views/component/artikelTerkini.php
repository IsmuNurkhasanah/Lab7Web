<h3 class="title">Artikel Terkini</h3>
<ul>
    <form method="get">
        <label for="kategori">Pilih Kategori:</label>
        <select name="kategori" id="kategori" onchange="this.form.submit()">
            <option value="">Semua</option>
            <?php foreach ($kategoriList as $k): ?>
                <option value="<?= esc($k['kategori']) ?>" <?= (request()->getGet('kategori') === $k['kategori']) ? 'selected' : '' ?>>

                    <?= esc($k['kategori']) ?>
                </option>
            <?php endforeach; ?>
        </select>
    </form>

    <?php foreach ($artikel as $a): ?>
        <li><a href="/artikel/<?= esc($a['slug']) ?>"><?= esc($a['judul']) ?></a></li>
    <?php endforeach; ?>
</ul>