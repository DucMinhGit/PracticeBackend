<?php

require __DIR__ . './Validate.php';

$data = [
    'firstname' => '',
    'username' => 'bob',
    'address' => ' The address must have at least 10 characte',
    'zipcode' => '999',
    'email' => 'jo@',
    'password' => 'test123',
    'password2' => 'test',
];



$fields = [
    'firstname' => 'required, max:255',
    'lastname' => 'required, max: 255',
    'address' => 'required | min: 10 , max:20',
    'zipcode' => 'between: 5,6',
    'username' => 'required | alphanumeric | between: 3,255 | unique: users,username',
    'email' => 'required | email | unique: users,email',
    'password' => 'required | secure',
    'password2' => 'required | same:password'
];


$errors = validate($data, $fields, [
    'required' => 'The %s is required',
    'password2' => ['same'=> 'Please enter the same password again']]
);

echo "<pre>";
print_r($errors);   
echo "</pre>";