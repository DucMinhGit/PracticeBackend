<?php

include './User.php';
include './Square.php';

$users = [
	new User(1, 'joe', 'joe@phptutorial.net'),
	new User(2, 'john', 'john@phptutorial.net'),
	new User(3, 'jane', 'jane@phptutorial.net'),
];


function arr_map(callable $callback, array $arrays)
{
    $array = [];

    foreach($arrays as $arr)
    {
        $array[] = $callback($arr);
    }

    return $array;
}

// $usernames = arr_map(fn($user) => $user->username, $users);

// echo '<pre>';
// print_r($usernames);
// echo '</pre>';

$lengths = [10, 20, 30];

$SquareAreas = array_map('Square::areas', $lengths);

echo '<pre>';
print_r($SquareAreas);
echo '</pre>';