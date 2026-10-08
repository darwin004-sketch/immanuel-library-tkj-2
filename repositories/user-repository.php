<?php
// Repository: sumber data sementara (array) sebelum dipakai database MySQL di TP 5.
// getUsers() = kembalikan SEMUA pengguna untuk tabel index.
function getUsers() {
  return [
    ["id" => 1, "name" => "Admin Utama",     "email" => "admin@ski.sch.id",              "role" => "admin"],
    ["id" => 2, "name" => "Budi Santoso",    "email" => "budi.santoso@siswa.ski.sch.id", "role" => "member"],
    ["id" => 3, "name" => "Siti Aminah",     "email" => "siti.aminah@siswa.ski.sch.id",  "role" => "member"],
    ["id" => 4, "name" => "Richard Marcell", "email" => "richard.m@ski.sch.id",          "role" => "admin"],
  ];
}

// getUser() = kembalikan SATU pengguna untuk form edit.
function getUser() {
  return ["id" => 2, "name" => "Budi Santoso", "email" => "budi.santoso@siswa.ski.sch.id", "role" => "member"];
}

// getProfile() = kembalikan data profil (phone/address/bio) untuk halaman Profil Saya.
function getProfile() {
  return [
    "user_id" => 2,
    "phone"   => "0812-3456-7890",
    "address" => "Jl. Merdeka No. 21, Pontianak, Kalimantan Barat",
    "bio"     => "Murid kelas XI TKJ yang gemar membaca novel fiksi dan buku pengembangan diri.",
  ];
}