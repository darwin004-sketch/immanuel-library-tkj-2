<!DOCTYPE html>
<!-- Halaman Penulis: data dari author-repository (getAuthors/getAuthor). -->
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Penulis - Perpustakaan Digital</title>
  <link rel="stylesheet" href="../../styles/authors/create.css">
</head>
<body>
  <div class="app-shell">
  <?php // Tampilkan sidebar component agar tidak duplikasi.
  require_once('../../components/admin/sidebar.php'); ?>

    <main class="app-main">
    <?php
      $pageTitle = "Tambah Penulis";
      $pageSubtitle = "Daftarkan penulis baru ke sistem";
      // Tampilkan topbar; $pageTitle/$pageSubtitle sudah diset di atas.
      require '../../components/admin/topbar.php';
    ?>

      <div class="app-content">
        <!-- Form POST: data dikirim ke actions, ditangkap via $_POST + isset(). -->
        <form method="POST" action="../../actions/authors/store.php">
          <div class="form-card">
            <div class="form-section-title">Data Penulis</div>
            <div class="form-group">
              <label for="name">Nama Penulis</label>
              <input type="text" id="name" name="name" placeholder="Contoh: Tere Liye">
            </div>
            <div class="form-group">
              <label for="bio">Biografi Singkat</label>
              <textarea id="bio" name="bio" rows="3" placeholder="Biografi singkat penulis"></textarea>
            </div>
            <div class="form-actions">
              <a href="index.php" class="btn btn-outline">Batal</a>
              <button type="submit" class="btn btn-primary">Simpan Penulis</button>
            </div>
          </div>
        </form>
      </div>
    </main>
  </div>
</body>
</html>
