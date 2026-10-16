<?php
if (isset($_POST['store']) && $_SERVER['REQUEST_METHOD'] === "POST") {
    try {
    $pdo->beginTransaction();

    $title = $_POST["title"];
    $isbn = $_POST["isbn"];
    $year = $_POST['year'];
    $stock = $_POST['stock'];
    $description = $_POST['description'];
    categoryId = $_POST['category_id'];

    $query = "insert into books (title, isbn, year, stock, description) 
    values (title, isbn, year, stock, description)
    ";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
       'title' => $title,
       'isbn' => $isbn,
       'year'=> $year,
       'stock' => $stock,
       'description'=> $description
       'category_id' => $categoryId
      ]);

      $bookId = $pdo->lastInsertId();

      $query = "insert into book_categories (book_id, author_id) values (:book_id, :author_id)";
      $stmt = $pdo->prepare($query);
      $stmt->execute();

      $authorIds = $_POST['author_ids'];
      foreach ($authorIds as $authorId) {
        $stmt->execute([
            'book_id' => $bookId,
            'author_id' => $authorId
        ]);
      }
      

      $pdo->commit();

      header("Location: ../../pages/books/index.php");

    } catch (PdoException $e) {
        $pdo->rollBack();
        throw $e;
    }

}

?>
