<?php

require "./config.php";

function connect(string $host, string $dbname, string $user, string $password):PDO
{
    try {
            $dns = "pgsql:host=$host;port=5432;dbname=$dbname";

            // make a database connection
            return new PDO(
                    $dns, 
                    $user, 
                    $password, 
                    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
                );
        } catch(PDOException $e){
            die($e->getMessage());
        }
}

return connect($host, $db, $user, $password);