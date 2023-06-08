<?php

session_start();

require_once __DIR__ . './inc/header.php';

$errors = [];
$inputs = [];

$request_method = $_SERVER['REQUEST_METHOD'];

if ($request_method === 'GET') {
    if (isset($_SESSION['message'])) {
        $message = $_SESSION['message'];
        unset($_SESSION['message']);
    } else if (isset($_SESSION['message_err'])) {
        $message_err = $_SESSION['message_err'];
        unset($_SESSION['message_err']);
    } else if (isset($_SESSION['inputs']) && isset($_SESSION['errors'])) {
        $inputs = $_SESSION['inputs'];
        unset($_SESSION['inputs']);

        $errors = $_SESSION['errors'];
        unset($_SESSION['errors']);
    }

    require_once __DIR__ . './inc/get.php';
} else if ($request_method === 'POST') {
    require_once __DIR__ . './inc/post.php';

    if (!$errors) {
        require_once __DIR__ . './inc/mail.php';

        if ($status_send_mail) {
            $_SESSION['message'] = "Thanks for contacting us! We will be in touch with you shortly.";
        } else {
            $_SESSION['message_err'] = "Your contact has not been sent, please come back in a few minutes";
        }
    } else {
        $_SESSION['inputs'] = $inputs;
        $_SESSION['errors'] = $errors;

        require_once __DIR__ . './inc/get.php';
    }

    header('Location: index.php', true, 303);
    exit;
}

require_once __DIR__ . './inc/footer.php';
