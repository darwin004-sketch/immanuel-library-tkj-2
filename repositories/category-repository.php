<?php
require_once __DIR__ . "/../config/database.php";
function getCategories() {
  global $pdo;
  $stmt = $pdo->query("SELECT * FROM categories");
$query = "select * from categories";
 $stmt->execute();
  
 $categories = $stmt->fetchAll(PDO::FETCH_ASSOC);

  return $categories;
}

function getCategory($id) {
 
$category

    ["id" => 4, "name" => "Teknologi", "description" => "Buku pemrograman dan teknologi", "total_books" => 0],
  ];

  return $categories;
}
