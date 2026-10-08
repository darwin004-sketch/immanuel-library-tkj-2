<!DOCTYPE html>
<!-- Halaman Profil: data dari getUser()+getProfile(), form ke actions/profile/update. -->
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profil Saya - Perpustakaan Digital</title>
  <link rel="stylesheet" href="../../styles/profile/edit.css">
</head>
<body>
  <?php
    // Ambil data dari repository (satu sumber data).
    require '../../repositories/user-repository.php';

    $user = getUser();
    $profile = getProfile();
  ?>
  <div class="app-shell">
  <?php // Tampilkan sidebar component agar tidak duplikasi.
  require_once('../../components/admin/sidebar.php'); ?>

    <main class="app-main">
    <?php
      $pageTitle = "Profil Saya";
      $pageSubtitle = "Kelola data akun dan profil Anda";
      // Tampilkan topbar; $pageTitle/$pageSubtitle sudah diset di atas.
      require '../../components/admin/topbar.php';
    ?>

      <div class="app-content">
        <!-- Form POST: data dikirim ke actions, ditangkap via $_POST + isset(). -->
        <form method="POST" action="../../actions/profile/update.php">
          <div class="form-card" style="margin-bottom:20px;">
            <div class="form-section-title">Data Akun</div>
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
              <label>Role</label>
              <input type="text" value="<?= ucfirst($user['role']) ?>" disabled>
              <p class="form-help">Role hanya dapat diubah oleh Admin melalui menu Manajemen Pengguna.</p>
            </div>
          </div>

          <div class="form-card">
            <div class="form-section-title">Data Profil</div>
            <div class="form-group">
              <label for="phone">Nomor Telepon</label>
              <input type="text" id="phone" name="phone" value="<?= $profile['phone'] ?>">
            </div>
            <div class="form-group">
              <label for="address">Alamat</label>
              <input type="text" id="address" name="address" value="<?= $profile['address'] ?>">
            </div>
            <div class="form-group">
              <label for="bio">Bio Singkat</label>
              <textarea id="bio" name="bio" rows="3"><?= $profile['bio'] ?></textarea>
            </div>
            <div class="form-actions">
              <button type="button" class="btn btn-outline">Batal</button>
              <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            </div>
          </div>
        </form>
      </div>
    </main>
  </div>
</body>
</html>
