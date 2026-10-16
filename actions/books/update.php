<?php
<<<<<<< HEAD
// Action: hanya memproses data (tanpa tampilan), sesuai alur pages -> actions.
// isset() = validasi: pastikan data form benar-benar dikirim sebelum diproses.
if (isset($_POST['id'])) {
  echo "<h3>Data buku yang diubah diterima:</h3>";
  echo "<pre>";
  // print_r() = bukti data diterima (simulasi simpan, DB baru di TP 5).
  print_r($_POST);
  echo "</pre>";
} else {
  echo "Tidak ada data yang dikirim.";
}
=======
if (isset($_POST['update']) && $_SERVER['REQUEST_METHOD'] === "POST") {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $isbn = $_POST['isbn'];
    $year = $_POST['year'];
    $stock = $_POST['stock'];
    $categoryId = $_POST['category_id'];
    $description = $_POST['description'];
    $authorIds = isset($_POST['author_ids']) ? $_POST['author_ids'] : [];

    print_r($_POST);
}

?>
>>>>>>> cdd929f (feat: update source code from video)
