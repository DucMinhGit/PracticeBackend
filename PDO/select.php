<?php

$sql = "SELECT publisher_id, name
        FROM publishers";

// Connect database
$pdo = require "./Connection.php";

$statement = $pdo->query($sql);

$publishers = $statement->fetchAll(PDO::FETCH_ASSOC);

if($publishers)
{
    // show all publishers
    foreach($publishers as $publisher)
    {
        echo $publisher['name'] . "<br>";
    }
}