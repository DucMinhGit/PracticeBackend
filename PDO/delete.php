<?php

$publisher_id = 11;

$sql = "DELETE FROM publishers 
        WHERE publisher_id=:publisher_id";

$pdo = require "./Connection.php";

$statement = $pdo->prepare($sql);

$statement->bindParam(":publisher_id", $publisher_id, PDO::PARAM_INT);

return $statement->execute();
