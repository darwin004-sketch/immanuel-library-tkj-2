<?php
<<<<<<< HEAD
// Repository: sumber data sementara (array) sebelum dipakai database MySQL di TP 5.
// getAuthors() = kembalikan SEMUA penulis untuk tabel + checkbox form buku.
function getAuthors() {
  return [
    ["id" => 1, "name" => "Andrea Hirata",        "total_books" => 1],
    ["id" => 2, "name" => "Tere Liye",             "total_books" => 1],
    ["id" => 3, "name" => "J.K. Rowling",          "total_books" => 1],
    ["id" => 4, "name" => "Pramoedya Ananta Toer", "total_books" => 2],
    ["id" => 5, "name" => "Sapardi Djoko Damono",  "total_books" => 1],
=======

function getAuthors()
{
  $authors = [
    ["id" => 1, "name" => "Andrea Hirata",          "total_books" => 1],
    ["id" => 2, "name" => "Tere Liye",               "total_books" => 1],
    ["id" => 3, "name" => "J.K. Rowling",            "total_books" => 1],
    ["id" => 4, "name" => "Pramoedya Ananta Toer",   "total_books" => 2],
    ["id" => 5, "name" => "Sapardi Djoko Damono",    "total_books" => 1],
>>>>>>> cdd929f (feat: update source code from video)
  ];

  return $authors;
}

<<<<<<< HEAD
// getAuthor() = kembalikan SATU penulis untuk form edit.
function getAuthor() {
  return [
    "id" => 1,
=======
function getAuthor()
{
  $author = [
    "id"   => 1,
>>>>>>> cdd929f (feat: update source code from video)
    "name" => "Andrea Hirata",
    "bio"  => "Penulis asal Belitung, dikenal lewat novel Laskar Pelangi.",
  ];

  return $author;
}
