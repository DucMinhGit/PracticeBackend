<?php

const FILTERS = [
    'string' => FILTER_SANITIZE_STRING,
    'string[]' => [
        'filter' => FILTER_SANITIZE_STRING,
        'flags' => FILTER_REQUIRE_ARRAY
    ],
    'email' => FILTER_SANITIZE_EMAIL,
    'int' => [
        'filter' => FILTER_SANITIZE_NUMBER_INT,
        'flags' => FILTER_REQUIRE_SCALAR
    ],
    'int[]' => [
        'filter' => FILTER_SANITIZE_NUMBER_INT,
        'flags' => FILTER_REQUIRE_ARRAY
    ],
    'float' => [
        'filter' => FILTER_SANITIZE_NUMBER_FLOAT,
        'flags' => FILTER_FLAG_ALLOW_FRACTION
    ],
    'float[]' => [
        'filter' => FILTER_SANITIZE_NUMBER_FLOAT,
        'flags' => FILTER_REQUIRE_ARRAY
    ],
    'url' => FILTER_SANITIZE_URL,
];

/**
 * Recursively trim strings in an array
 * @param array $items
 * @return array
 */

function array_trim($items)
{
    return array_map(function($item)
    {
        if(is_string($item)) {
            return trim($item);
        } 
        else if(is_array($item)){
            return array_trim($item);
        } 
        else {
            return $item;
        }
    }, $items);
}


/**
* Sanitize the inputs based on the rules an optionally trim the string
* @param array $inputs
* @param array $fields
* @param int $default_filter FILTER_SANITIZE_STRING
* @param array $filters FILTERS
* @param bool $trim
* @return array
*/
function sanitize(array $inputs, array $fields, $default_filter = FILTER_SANITIZE_STRING, $filters = FILTERS, $trim = true): array
{
    if($fields)
    {
        $option = array_map(fn($field) => FILTERS[$field] , $fields);
        $datas = filter_var_array($inputs, $option);
    } 
    else {
        $datas = filter_var_array($inputs, $default_filter);
    }

    return $trim ? array_trim($datas) : $datas;
}

