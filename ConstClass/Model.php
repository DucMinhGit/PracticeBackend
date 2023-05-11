<?php

abstract class Model
{
    protected const TABLE_NAME = '';

    public static function call()
    {
        return 'SELECT * FROM ' . static::TABLE_NAME;
    }
}