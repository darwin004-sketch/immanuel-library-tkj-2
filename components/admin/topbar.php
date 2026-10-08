<?php
$pageTitle = 'Manajemen Buku'; // Disesuaikan untuk tiap halaman sesuai tabel petunjuk
$pageSubtitle = 'Kelola data buku perpustakaan';

require_once '../../components/admin/sidebar.php';
require_once '../../components/admin/topbar.php';
?>

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