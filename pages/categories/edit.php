<!DOCTYPE html>
<!-- Halaman Kategori: data dari category-repository (getCategories/getCategory). -->
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Kategori - Perpustakaan Digital</title>
  <link rel="stylesheet" href="../../styles/categories/edit.css">
</head>
<body>
  <?php
    // Ambil data dari repository (satu sumber data).
    require '../../repositories/category-repository.php';
    $category = getCategory();
  ?>
  <div class="app-shell">
  <?php // Tampilkan sidebar component agar tidak duplikasi.
  require_once('../../components/admin/sidebar.php'); ?>

    <main class="app-main">
    <?php
      $pageTitle = "Edit Kategori";
      $pageSubtitle = "Perbarui data kategori";
      // Tampilkan topbar; $pageTitle/$pageSubtitle sudah diset di atas.
      require '../../components/admin/topbar.php';
    ?>

      <div class="app-content">
        <!-- Form POST: data dikirim ke actions, ditangkap via $_POST + isset(). -->
        <form method="POST" action="../../actions/categories/update.php">
          <input type="hidden" name="id" value="<?= $category['id'] ?>">
          <div class="form-card">
            <div class="form-section-title">Data Kategori</div>
            <div class="form-group">
              <label for="name">Nama Kategori</label>
              <input type="text" id="name" name="name" value="<?= $category['name'] ?>">
            </div>
            <div class="form-group">
              <label for="description">Deskripsi</label>
              <textarea id="description" name="description" rows="3"><?= $category['description'] ?></textarea>
            </div>

            <div class="form-actions">
              <a href="index.php" class="btn btn-outline">Batal</a>
              <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            </div>
          </div>
        </form>
      </div>
    </main>
  </div>
</body>
</html>
