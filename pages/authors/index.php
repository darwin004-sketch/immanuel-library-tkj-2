<!DOCTYPE html>
<!-- Halaman Penulis: data dari author-repository (getAuthors/getAuthor). -->
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Manajemen Penulis - Perpustakaan Digital</title>
  <link rel="stylesheet" href="../../styles/authors/index.css">
</head>
<body>
  <?php
    // Ambil data penulis dari repository agar satu sumber data (single source of truth).
    // Ambil data dari repository (satu sumber data).
    require '../../repositories/author-repository.php';
    // getAuthors() mengembalikan SEMUA penulis untuk ditampilkan lewat foreach di tabel.
    $authors = getAuthors();
  ?>
  <div class="app-shell">
  <?php // Tampilkan sidebar component agar tidak duplikasi.
  require_once('../../components/admin/sidebar.php'); ?>

    <main class="app-main">
    <?php
      // Isi judul topbar: WAJIB diset sebelum require topbar (lihat tabel 2.A).
      $pageTitle = "Manajemen Penulis";
      $pageSubtitle = "Kelola data penulis yang terdaftar di sistem";
      // Tampilkan component topbar yang sama di semua halaman admin.
      // Tampilkan topbar; $pageTitle/$pageSubtitle sudah diset di atas.
      require '../../components/admin/topbar.php';
    ?>
      <div class="app-content">
        <div class="toolbar">
          <form method="" action="" class="toolbar-filters">
            <div class="search-box">
              <svg class="icon" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="7"/><path d="m21 21-4.3-4.3"/></svg>
              <input type="text" name="search" class="search-input" placeholder="Cari nama penulis...">
            </div>
            <button type="submit" class="btn btn-outline btn-sm">Cari</button>
          </form>
          <a href="create.php" class="btn btn-primary">+ Tambah Penulis</a>
        </div>

        <div class="data-card">
          <table class="data-table">
            <thead>
              <tr>
                <th>Nama Penulis</th>
                <th>Jumlah Buku Ditulis</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
                <?php // foreach: tampilkan SEMUA data baris per baris.
              foreach ($authors as $author) : ?>
              <tr>
                <td>
                  <div class="cell-primary">
                    <span class="cell-thumb"><svg class="icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20h9"/><path d="M16.5 3.5a2.12 2.12 0 0 1 3 3L7 19l-4 1 1-4Z"/></svg></span>
                    <?= $author['name'] ?>
                  </div>
                </td>
                <td><span class="badge badge-muted"><?= $author['total_books'] ?> buku</span></td>
                <td>
                  <!-- Aksi Edit (ke form edit) dan Hapus (ke destroy + konfirmasi). -->
                  <div class="cell-actions">
                    <a href="edit.php?id=<?= $author['id'] ?>" class="btn btn-outline btn-sm">Edit</a>
                    <a href="../../actions/authors/destroy.php?id=<?= $author['id'] ?>"
                      class="btn btn-danger btn-sm"
                      onclick="return confirm('Yakin ingin menghapus penulis ini?')">Hapus</a>
                  </div>
                </td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>

        <div class="pagination">
          <span class="pagination-btn is-disabled">&lt;</span>
          <span class="pagination-btn is-disabled">&gt;</span>
        </div>
      </div>
    </main>
  </div>
</body>
</html>
