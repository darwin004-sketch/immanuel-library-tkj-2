<!DOCTYPE html>
<!-- Halaman Pengguna: data dari user-repository (getUsers/getUser). -->
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Pengguna - Perpustakaan Digital</title>
  <link rel="stylesheet" href="../../styles/users/edit.css">
</head>
<body>
  <?php
    // Ambil data dari repository (satu sumber data).
    require '../../repositories/user-repository.php';
    $user = getUser();
  ?>
  <div class="app-shell">
  <?php // Tampilkan sidebar component agar tidak duplikasi.
  require_once('../../components/admin/sidebar.php'); ?>

    <main class="app-main">
    <?php
      $pageTitle = "Edit Pengguna";
      $pageSubtitle = "Perbarui data dan role pengguna";
      // Tampilkan topbar; $pageTitle/$pageSubtitle sudah diset di atas.
      require '../../components/admin/topbar.php';
    ?>
      <div class="app-content">
        <!-- Form POST: data dikirim ke actions, ditangkap via $_POST + isset(). -->
        <form method="POST" action="../../actions/users/update.php">
          <input type="hidden" name="id" value="<?= $user['id'] ?>">
          <div class="form-card">
            <div class="form-section-title">Data Pengguna</div>
            <div class="form-row">
              <div class="form-group">
                <label for="name">Nama Lengkap</label>
                <input type="text" id="name" name="name" value="<?= $user['name'] ?>">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="<?= $user['email'] ?>">
              </div>
            </div>
            <div class="form-group">
              <label for="role">Role</label>
              <select id="role" name="role">
                <option value="member" <?= $user['role'] === 'member' ? 'selected' : '' ?>>Member</option>
                <option value="admin" <?= $user['role'] === 'admin' ? 'selected' : '' ?>>Admin</option>
              </select>
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
