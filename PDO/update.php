<?php

$publisher = [
    'publisher_id' => 11,
    'name' => 'McGraw-Hill Education'
];

$sql = "UPDATE publishers 
        SET name=:name 
        WHERE publisher_id=:publisher_id";

// connect to the bookdb database
$pdo = require "./Connection.php";

$statement = $pdo->prepare($sql);

$statement->bindValue(":name", $publisher['name']);
$statement->bindValue(":publisher_id", $publisher['publisher_id'], PDO::PARAM_INT);

return $statement->execute();
