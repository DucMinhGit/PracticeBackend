<?php

require './app/Bootstrap.php';

$user = new User('admin', '$ecurePa$$w0rd1');
echo $user->getUsername();

$comment = new Comment('Hello');
echo $comment->getComment();