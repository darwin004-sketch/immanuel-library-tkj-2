<?php
// Action: hanya memproses data (tanpa tampilan), sesuai alur pages -> actions.
// isset() = validasi: pastikan id dari URL benar-benar ada sebelum diproses.
// Dipanggil tombol Hapus di index (GET ?id=...) + confirm() di browser.
if (isset($_GET['id'])) {
  // Tangkap id dari URL; tampilkan pesan simulasi hapus (DB baru di TP 5).
  $id = $_GET['id'];
  echo "<h3>Penulis dengan id $id berhasil dihapus.</h3>";
  echo '<p><a href="../../pages/authors/index.php">Kembali ke daftar penulis</a></p>';
} else {
  echo "id penulis tidak ditemukan.";
}