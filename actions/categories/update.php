<?php
// Action: hanya memproses data (tanpa tampilan), sesuai alur pages -> actions.
// isset() = validasi: pastikan data form benar-benar dikirim sebelum diproses.
if (isset($_POST['id'])) {
  echo "<h3>Data kategori yang diubah diterima:</h3>";
  echo "<pre>";
  // print_r() = bukti data diterima (simulasi simpan, DB baru di TP 5).
  print_r($_POST);
  echo "</pre>";
} else {
  echo "Tidak ada data yang dikirim.";
}