<?php
<<<<<<< HEAD
// Repository: sumber data sementara (array) sebelum dipakai database MySQL di TP 5.
// getBooks() = kembalikan BANYAK buku untuk tabel index (foreach).
function getBooks() {
  return [
=======

function getBooks()
{
  $books = [
>>>>>>> cdd929f (feat: update source code from video)
    [
      "id" => 1,
      "title" => "Laskar Pelangi",
      "category" => "Fiksi",
      "year" => 2005,
      "stock" => 12,
      "authors" => ["Andrea Hirata"],
    ],
    [
      "id" => 2,
      "title" => "Bumi",
      "category" => "Fiksi",
      "year" => 2014,
      "stock" => 8,
      "authors" => ["Tere Liye"],
    ],
    [
      "id" => 3,
      "title" => "Harry Potter dan Batu Bertuah",
      "category" => "Fiksi",
      "year" => 1997,
      "stock" => 5,
      "authors" => ["J.K. Rowling"],
    ],
    [
      "id" => 4,
      "title" => "Bumi Manusia",
      "category" => "Sejarah",
      "year" => 1980,
      "stock" => 6,
      "authors" => ["Pramoedya Ananta Toer"],
    ],
    [
      "id" => 5,
      "title" => "Antologi Rasa Nusantara",
      "category" => "Fiksi",
      "year" => 2021,
      "stock" => 4,
      "authors" => ["Pramoedya Ananta Toer", "Sapardi Djoko Damono"],
    ],
  ];

  return $books;
}
<<<<<<< HEAD
// getBook() = kembalikan SATU buku untuk show/edit (tanpa parameter, sesuai TP 4).
function getBook() {
  return [
=======

function getBook()
{

  $book = [
>>>>>>> cdd929f (feat: update source code from video)
    "id" => 5,
    "title" => "Antologi Rasa Nusantara",
    "isbn" => "978-602-1234-56-7",
    "year" => 2021,
    "stock" => 4,
    "category_id" => 1,
    "category" => "Fiksi",
    "description" => "Kumpulan puisi dan cerita pendek dari berbagai penulis Nusantara.",
    "author_ids" => [4, 5],
    "authors" => ["Pramoedya Ananta Toer", "Sapardi Djoko Damono"],
  ];
  return $book;
}