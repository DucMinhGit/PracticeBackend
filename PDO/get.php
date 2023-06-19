<?php

/**
 * Return an array of books with the book id in the $list
 */
function get_book_list(\PDO $pdo, array $list)
{
    $placeholder = str_repeat('?,', count($list) - 1) . '?';

    $sql = "SELECT book_id, title 
            FROM books
            WHERE book_id IN ($placeholder)";

    $statement = $pdo->prepare($sql);
    $statement->execute($list);

    return $statement->fetch(PDO::FETCH_ASSOC);
}

// connect to the database
$pdo = require "./Connection.php";

// get a list of book
$books = get_book_list($pdo, [1, 2, 3]);

print_r($books);
