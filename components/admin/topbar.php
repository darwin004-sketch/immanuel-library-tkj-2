<?php
// Component topbar admin.
// File ini hanya berisi potongan HTML <header>, tanpa <html>/<head>/<body>.
// $pageTitle dan $pageSubtitle WAJIB diisi halaman pemanggil SEBELUM require file ini,
// supaya judul dan subjudul berubah sesuai halaman (lihat tabel Sub-bagian 2.A).
?>
<!-- Judul halaman dinamis dari $pageTitle dan $pageSubtitle. -->
<header class="app-topbar">
  <div class="page-title">
    <h1><?= $pageTitle ?></h1>
    <p><?= $pageSubtitle ?></p>
  </div>
  <div class="topbar-user">
    <span class="avatar">BS</span>
    <div>
      Budi Santoso<br>
      <span class="badge badge-member" style="margin-top:2px;">Member</span>
    </div>
  </div>
</header>