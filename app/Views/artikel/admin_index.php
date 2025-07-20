<?= view('template/admin_header'); ?>

<h2><?= esc($title); ?></h2>

<div class="row mb-3">
    <div class="col-md-6">
        <form id="search-form" class="form-inline">
            <input type="text" name="q" id="search-box" value="<?= esc($q); ?>" placeholder="Cari judul artikel" class="form-control mr-2">

            <select name="kategori_id" id="category-filter" class="form-control mr-2">
                <option value="">Semua Kategori</option>
                <?php foreach ($kategori as $k): ?>
                    <option value="<?= esc($k['id_kategori']); ?>" <?= ($kategori_id == $k['id_kategori']) ? 'selected' : ''; ?>>
                        <?= esc($k['nama_kategori']); ?>
                    </option>
                <?php endforeach; ?>
            </select>

            <button type="submit" class="btn btn-primary">Cari</button>
        </form>
    </div>
</div>

<select id="sort-by" class="form-control mr-2" style="margin-left: 20px;">
    <option value="">Urutkan</option>
    <option value="judul_asc">Judul A-Z</option>
    <option value="judul_desc">Judul Z-A</option>
</select>

<div id="article-container"></div>
<div id="pagination-container"></div>
<div id="loading-indicator" style="display:none; margin-left: 100px">
    <p>Memuat data...</p>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        const BASE_URL = "<?= base_url() ?>";
        const articleContainer = $('#article-container');
        const paginationContainer = $('#pagination-container');
        const searchForm = $('#search-form');
        const searchBox = $('#search-box');
        const categoryFilter = $('#category-filter');
        const sortSelect = $('#sort-by');

        // Pagination click delegation
        paginationContainer.on('click', 'a', function(e) {
            e.preventDefault();
            const href = $(this).attr('href');
            if (!href) return;

            // Bangun URL lengkap dari href (bisa relatif)
            const url = new URL(href, window.location.origin);

            // Tambahkan kembali parameter pencarian, filter, dan sort
            url.searchParams.set('q', searchBox.val());
            url.searchParams.set('kategori_id', categoryFilter.val());
            url.searchParams.set('sort', sortSelect.val());

            fetchData(url.toString());
        });


        function fetchData(url) {
            $('#loading-indicator').show();

            const q = searchBox.val();
            const kategori_id = categoryFilter.val();
            const sort = sortSelect.val();

            const urlObj = new URL(url, window.location.origin);
            urlObj.searchParams.set('q', q);
            urlObj.searchParams.set('kategori_id', kategori_id);
            urlObj.searchParams.set('sort', sort);

            $.ajax({
                url: urlObj.toString(),
                type: 'GET',
                dataType: 'json',
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                },
                success: function(data) {
                    renderArticles(data.artikel);
                    renderPagination(data.pager);
                },
                error: function() {
                    articleContainer.html('<p class="text-danger">Gagal memuat data.</p>');
                },
                complete: function() {
                    $('#loading-indicator').hide();
                }
            });
        }

        function renderArticles(articles) {
            let html = `
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Judul</th>
                    <th>Kategori</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>`;

            if (articles.length > 0) {
                articles.forEach(article => {
                    html += `
                <tr>
                    <td>${article.id}</td>
                    <td>
                        <strong>${article.judul}</strong>
                        <p><small>${article.isi.substring(0, 50)}...</small></p>
                    </td>
                    <td>${article.nama_kategori}</td>
                    <td>${article.status}</td>
                    <td>
                        <a class="btn btn-sm btn-ubah" href="/admin/artikel/edit/${article.id}">Ubah</a>
                        <a class="btn btn-sm btn-hapus" href="/admin/artikel/delete/${article.id}" onclick="return confirm('Yakin menghapus data?');">Hapus</a>
                    </td>
                </tr>`;
                });
            } else {
                html += '<tr><td colspan="5">Tidak ada data ditemukan.</td></tr>';
            }

            html += '</tbody></table>';
            articleContainer.html(html);
        }

        function renderPagination(linksHtml) {
            // Render langsung HTML string dari server
            if (linksHtml && linksHtml.trim() !== '') {
                paginationContainer.html(linksHtml);
            } else {
                paginationContainer.html('');
            }
        }

        sortSelect.on('change', function() {
            searchForm.trigger('submit');
        });


        // Form submit
        searchForm.on('submit', function(e) {
            e.preventDefault();
            const q = searchBox.val();
            const kategori_id = categoryFilter.val();
            const sort = sortSelect.val();
            const queryUrl = `${BASE_URL}admin/artikel?q=${encodeURIComponent(q)}&kategori_id=${encodeURIComponent(kategori_id)}&sort=${encodeURIComponent(sort)}`;
            fetchData(queryUrl);
        });

        // Filter kategori otomatis submit
        categoryFilter.on('change', function() {
            searchForm.trigger('submit');
        });

        // Initial load
        fetchData(BASE_URL + 'admin/artikel');
    });
</script>

<?= view('template/admin_footer'); ?>