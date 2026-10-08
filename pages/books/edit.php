<!DOCTYPE html>
<!-- Halaman Buku: tampilan HTML, data dari book-repository, form ke actions/books. -->
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Buku - Perpustakaan Digital</title>
  <link rel="stylesheet" href="../../styles/books/edit.css">
</head>
<body>
  <?php
  // Ambil data buku + opsi dari repository (satu sumber data, lihat Sub-bagian 2.G).
  // Ambil data dari repository (satu sumber data).
    require '../../repositories/book-repository.php';
  // Ambil data dari repository (satu sumber data).
    require '../../repositories/category-repository.php';
  // Ambil data dari repository (satu sumber data).
    require '../../repositories/author-repository.php';
  $categories = getCategories();
  $authors = getAuthors();
  // getBook() mengembalikan SATU buku untuk ditampilkan di form edit.
  $book = getBook();
  ?>
  <div class="app-shell">
  <?php // Tampilkan sidebar component agar tidak duplikasi.
  require_once('../../components/admin/sidebar.php'); ?>

    <main class="app-main">
    <?php
      $pageTitle = "Edit Buku";
      $pageSubtitle = "Perbarui data buku, kategori, dan penulis";
      // Tampilkan topbar; $pageTitle/$pageSubtitle sudah diset di atas.
      require '../../components/admin/topbar.php';
    ?>

      <div class="app-content">
        <!-- Form POST: data dikirim ke actions, ditangkap via $_POST + isset(). -->
        <form method="POST" action="../../actions/books/update.php">
          <input type="hidden" name="id" value="<?= $book['id'] ?>">
          <div class="form-card" style="margin-bottom:20px;">
            <div class="form-section-title">Data Buku</div>
            <div class="form-group">
              <label for="title">Judul Buku</label>
              <input type="text" id="title" name="title" value="<?= $book['title'] ?>">
            </div>
            <div class="form-row">
              <div class="form-group">
                <label for="isbn">ISBN</label>
                <input type="text" id="isbn" name="isbn" value="<?= $book['isbn'] ?>">
              </div>
              <div class="form-group">
                <label for="year">Tahun Terbit</label>
                <input type="number" id="year" name="year" value="<?= $book['year'] ?>">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group">
                <label for="stock">Jumlah Stok</label>
                <input type="number" id="stock" name="stock" value="<?= $book['stock'] ?>">
              </div>
              <div class="form-group">
                <label for="category_id">Kategori</label>
                <select id="category_id" name="category_id">
                  <?php // foreach: tampilkan SEMUA data baris per baris.
              foreach ($categories as $category): ?>
                    <option value="<?= $category['id'] ?>" <?= $category['id'] === $book['category_id'] ? 'selected' : '' ?>><?= $category['name'] ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label for="description">Deskripsi</label>
              <textarea id="description" name="description" rows="3"><?= $book['description'] ?></textarea>
            </div>
          </div>

          <div class="form-card">
            <div class="form-section-title">Penulis Buku</div>
            <div class="form-group">
              <label>Pilih Penulis (bisa lebih dari satu)</label>
              <div class="checkbox-grid">
                <?php // foreach: tampilkan SEMUA data baris per baris.
              foreach ($authors as $author): ?>
                  <label class="checkbox-item">
                    <input type="checkbox" name="author_ids[]" value="<?= $author['id'] ?>" <?= in_array($author['id'], $book['author_ids']) ? 'checked' : '' ?>>
                    <?= $author['name'] ?>
                  </label>
                <?php endforeach; ?>
              </div>
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
