<?= view('template/admin_header'); ?>
<h1>Data Artikel</h1>

<button class="btn btn-tambah" id="btnShowModal">+ Tambah Artikel</button>

<table class="table-data" id="artikelTable">
    <thead>
        <tr>
            <th>ID</th>
            <th>Judul</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody></tbody>
</table>

<script src="<?= base_url('assets/js/jquery-3.6.0.min.js') ?>"></script>
<script>
    $(document).ready(function() {

        // Show modal
        $('#btnShowModal').on('click', function() {
            $('#formModal').fadeIn();
        });

        // Close modal when clicking 'X' or 'Batal'
        $('.btnCloseModal, #btnCloseModal').on('click', function() {
            $('#formModal').fadeOut();
            $('#artikelForm')[0].reset(); // reset form
        });

        // Submit form
        $('#artikelForm').on('submit', function(e) {
            e.preventDefault();
            var formData = new FormData(this);

            $.ajax({
                url: "<?= base_url('ajax/add') ?>",
                method: "POST",
                data: formData,
                processData: false,
                contentType: false,
                success: function(res) {
                    if (res.status === 'success') {
                        alert(res.message);
                        $('#formModal').fadeOut();
                        $('#artikelForm')[0].reset();
                        loadData();
                    } else {
                        alert('Gagal: ' + JSON.stringify(res.errors));
                    }
                }
            });
        });

        // Tampilkan modal dan isi data ke dalam form saat klik Edit
        $(document).on('click', '.btn-ubah', function(e) {
            e.preventDefault();
            var id = $(this).data('id');

            $.ajax({
                url: "<?= base_url('ajax/getDataById/') ?>" + id,
                method: "GET",
                dataType: "json",
                success: function(res) {
                    if (res) {
                        $('#formEdit input[name="id"]').val(res.id);
                        $('#formEdit input[name="judul"]').val(res.judul);
                        $('#formEdit textarea[name="isi"]').val(res.isi);
                        $('#formEdit select[name="id_kategori"]').val(res.id_kategori);

                        // Tampilkan gambar jika ada
                        if (res.gambar && res.gambar !== '') {
                            $('#formEdit #preview-gambar').html(
                                '<img src="<?= base_url('gambar/') ?>' + res.gambar + '" width="100">'
                            );
                            $('#gambar_lama').val(res.gambar);
                        } else {
                            $('#formEdit #preview-gambar').html('<small>Tidak ada gambar</small>');
                            $('#gambar_lama').val('');
                        }

                        $('#modalEdit').fadeIn();
                    } else {
                        alert("Data tidak ditemukan.");
                    }
                },
                error: function() {
                    alert("Gagal mengambil data artikel.");
                }
            });
        });


        // Submit Edit
        $('#formEdit').on('submit', function(e) {
            e.preventDefault();
            var formData = new FormData(this);

            $.ajax({
                url: "<?= base_url('ajax/edit') ?>",
                method: "POST",
                data: formData,
                processData: false,
                contentType: false,
                success: function(res) {
                    if (res.status === 'success') {
                        alert(res.message);
                        $('#modalEdit').fadeOut();
                        $('#formEdit')[0].reset();
                        loadData();
                    } else {
                        alert('Gagal update: ' + JSON.stringify(res.errors));
                    }
                }
            });
        });

        // Tutup modal edit
        $('.btnCloseEditModal').on('click', function() {
            $('#modalEdit').fadeOut();
            $('#formEdit')[0].reset();
        });


        function showLoadingMessage() {
            $('#artikelTable tbody').html('<tr><td colspan="4">Loading data...</td></tr>');
        }

        function loadData() {
            showLoadingMessage(); // Tampilkan pesan loading

            $.ajax({
                url: "<?= base_url('ajax/getData') ?>",
                method: "GET",
                dataType: "json",
                success: function(data) {
                    var tableBody = "";
                    for (var i = 0; i < data.length; i++) {
                        var row = data[i];
                        tableBody += '<tr>';
                        tableBody += '<td>' + row.id + '</td>';
                        tableBody += '<td>' + row.judul + '</td>';
                        tableBody += '<td><span class="status">--</span></td>';
                        tableBody += '<td>';
                        tableBody += '<a href="#" class="btn btn-ubah" data-id="' + row.id + '">Edit</a> ';
                        tableBody += '<a href="#" class="btn btn-danger btn-hapus" data-id="' + row.id + '">Delete</a>';
                        tableBody += '</td>';
                        tableBody += '</tr>';
                    }
                    $('#artikelTable tbody').html(tableBody);
                },
                error: function() {
                    $('#artikelTable tbody').html('<tr><td colspan="4">Gagal memuat data.</td></tr>');
                }
            });
        }

        loadData(); // Load data saat halaman siap

        // Event untuk tombol delete
        $(document).on('click', '.btn-hapus', function(e) {
            e.preventDefault();
            var id = $(this).data('id');

            if (confirm('Apakah Anda yakin ingin menghapus artikel ini?')) {
                $.ajax({
                    url: "<?= base_url('ajax/delete/') ?>" + id,
                    method: "DELETE",
                    success: function() {
                        loadData(); // Refresh data setelah delete
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        alert('Gagal menghapus artikel: ' + textStatus + ' ' + errorThrown);
                    }
                });
            }
        });
    });
</script>

<?= $this->include('ajax/add'); ?>
<?= $this->include('ajax/edit'); ?>

<?= view('template/admin_footer'); ?>