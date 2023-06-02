<?php

$agree = filter_input(INPUT_POST, 'agree', FILTER_SANITIZE_STRING);

if($agree)
{
    echo  'Thank you for joining us!';
}
else {
    $errors['agree'] = 'To join us, you need to agree to the TOS.';
}