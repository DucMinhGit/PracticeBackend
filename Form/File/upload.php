<?php

session_start();

require_once __DIR__ . '../../Flash/inc/flash.php';
require_once __DIR__ . './inc/functions.php';

const ALLOWED_FILES = [
    'image/png' => 'png',
    'image/jpeg' => 'jpg'
];

const MAX_SIZE = 5 * (1024 * 1024); //  5MB

const UPLOAD_DIR = __DIR__ . '/uploads';


$is_post_request = strtolower($_SERVER['REQUEST_METHOD']) === 'post';
$has_file = isset($_FILES['files']);

if (!$is_post_request || !$has_file) {
    redirect_with_message('Invalid file upload operation', FLASH_ERROR);
}

$files = $_FILES['files'];
$file_count = count($files['name']);

$errors = [];

for($i = 0; $i < $file_count; $i++)
{
    $status = $files['error'][$i];
    $filename = $files['name'][$i];
    $tmp = $files['tmp_name'][$i];

    if($status !== UPLOAD_ERR_OK)
    {
        $errors[$filename] = MESSAGES[$status];
        continue;
    }

    
    $filesize = filesize($tmp);
    if($filesize > MAX_SIZE)
    {
        $messages = sprintf("The file %s is %s which is greater than the allowed size %s", $filename, format_filesize($filesize), format_filesize(MAX_SIZE));
        $errors[$filesize] = $messages;
        continue;
    }
    
    $mime_type = get_mime_type($tmp);
    if(!in_array($mime_type, array_keys(ALLOWED_FILES)))
    {
        $errors[$filename] = "The file {$filename} is allowed to upload";
    }
}

if($errors)
{
    redirect_with_message(format_messages('The following errors occurred: ', $errors), FLASH_ERROR);
}

for($i = 0; $i < $file_count; $i++)
{
    $filename = $files['name'][$i];
    $tmp = $files['tmp_name'][$i];
    $mime_type = get_mime_type($tmp);
    
    $uploaded_file = pathinfo($filename, PATHINFO_FILENAME) . '.' . ALLOWED_FILES[$mime_type];

    $filepath = UPLOAD_DIR . '/' . $uploaded_file;

    $success = move_uploaded_file($tmp, $filepath);

    if(!$success)
    {
        $errors[$filename] = "The file {$filename} was failed to move.";
    }
}

$errors ? redirect_with_message(format_messages('The following errors occurred:',$errors), FLASH_ERROR) :
            redirect_with_message('All the files were uploaded successfully.', FLASH_SUCCESS);
