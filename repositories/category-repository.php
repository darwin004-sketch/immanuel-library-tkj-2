<?php
<<<<<<< HEAD
// Repository: sumber data sementara (array) sebelum dipakai database MySQL di TP 5.
// getCategories() = kembalikan SEMUA kategori untuk tabel + dropdown form buku.
function getCategories() {
  return [
    ["id" => 1, "name" => "Fiksi",     "description" => "Novel dan cerita rekaan",       "total_books" => 3],
    ["id" => 2, "name" => "Sains",     "description" => "Buku ilmu pengetahuan alam",     "total_books" => 0],
    ["id" => 3, "name" => "Sejarah",   "description" => "Buku sejarah dan biografi",      "total_books" => 1],
    ["id" => 4, "name" => "Teknologi", "description" => "Buku pemrograman dan teknologi", "total_books" => 0],
=======

function getCategories()
{
  $categories = [
    ["id" => 1, "name" => "Fiksi",     "description" => "Novel dan cerita rekaan",        "total_books" => 3],
    ["id" => 2, "name" => "Sains",     "description" => "Buku ilmu pengetahuan alam",      "total_books" => 0],
    ["id" => 3, "name" => "Sejarah",   "description" => "Buku sejarah dan biografi",       "total_books" => 1],
    ["id" => 4, "name" => "Teknologi", "description" => "Buku pemrograman dan teknologi",  "total_books" => 0],
>>>>>>> cdd929f (feat: update source code from video)
  ];

  return $categories;
}

<<<<<<< HEAD
// getCategory() = kembalikan SATU kategori untuk form edit.
function getCategory() {
  return ["id" => 1, "name" => "Fiksi", "description" => "Novel dan cerita rekaan", "total_books" => 3];
}
=======
function getCategory()
{
  $category = [
    "id"          => 1,
    "name"        => "Fiksi",
    "description" => "Novel dan cerita rekaan",
  ];

  return $category;
}
>>>>>>> cdd929f (feat: update source code from video)
