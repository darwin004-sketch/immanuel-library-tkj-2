<?php
<<<<<<< HEAD
// Action: hanya memproses data (tanpa tampilan), sesuai alur pages -> actions.
// isset() = validasi: pastikan data form benar-benar dikirim sebelum diproses.
if (isset($_POST['title'])) {
  echo "<h3>Data buku baru diterima:</h3>";
  echo "<pre>";
  // print_r() = bukti data diterima (simulasi simpan, DB baru di TP 5).
  print_r($_POST);
  echo "</pre>";
} else {
  echo "Tidak ada data yang dikirim.";
}
=======
if (isset($_POST['store']) && $_SERVER['REQUEST_METHOD'] === "POST") {
    print_r($_POST);
}

?>
>>>>>>> cdd929f (feat: update source code from video)
