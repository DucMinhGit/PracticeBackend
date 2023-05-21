<?php

namespace Acme\Blog;

class Comment
{
    public function __construct(private $comment){}

    public function getComment():string
    {
        return $this->comment;
    }
}