<?php

require __DIR__ . '/../Validate/Validate.php';
require __DIR__ . '/../Sanitize/sanitization.php';

/**
 * filter data input
 * @param array $data
 * @param array $fields
 * @param array $messages
 * @return array
 */
function filter(array $data, array $fields, array $messages=[]) : array
{
    $sanitization_rules = [];
    $validation_rules  = [];

    foreach ($fields as $field=>$rules) {
        if (strpos($rules, '|')) {
            [$sanitization_rules[$field], $validation_rules[$field] ] =  explode('|', $rules, 2);
        } else {
            $sanitization_rules[$field] = $rules;
        }
    }

    $sanitization_rules = array_trim($sanitization_rules);

    $inputs = sanitize($data, $sanitization_rules);
    $errors = validate($inputs, $validation_rules, $messages);

    return [$inputs, $errors];
}