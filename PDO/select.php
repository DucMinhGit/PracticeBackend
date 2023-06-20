<?php

$publisher_id = 11;

$sql = "SELECT publisher_id, name
        FROM publishers WHERE publisher_id=:publisher_id";

// Connect database
$pdo = require "./Connection.php";

$statement = $pdo->prepare($sql);
$statement->bindValue(":publisher_id", $publisher_id);

$statement->execute();

$publisher = $statement->fetch(PDO::FETCH_ASSOC);

if($publisher)
{
    echo $publisher['publisher_id'] . '.' . $publisher['name'];
} else {
	echo "The publisher with id $publisher_id was not found.";
}