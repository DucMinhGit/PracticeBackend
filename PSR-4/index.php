<?php

require_once "./app/Bootstrap.php";

use Acme\Auth\User;
use Acme\Blog\Comment;

$user = new User("Duc Minh", "123");

echo $user->getUsername();

$comment = new Comment("Hello guy!");

echo $comment->getComment();