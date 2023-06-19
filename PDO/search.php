<?php

/**
* Find books by title based on a pattern
*/
function find_book_by_title(\PDO $pdo, string $keyword)
{
    $pattern = '%' . $keyword . '%';

    $sql = "SELECT book_id, title 
            FROM books
            WHERE title LIKE :pattern";
    
    $statement = $pdo->prepare($sql);
    $statement->execute([':pattern' => $pattern]);

    return $statement->fetch(PDO::FETCH_ASSOC);
}

// connect to the database
$pdo = require "./Connection.php";

// find books with the title matches 'es'
$books = find_book_by_title($pdo, 'es');

foreach($books as $book)
{
    echo $book['title'];
}