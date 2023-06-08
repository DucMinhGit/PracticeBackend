<?php

session_start();

require_once __DIR__ . '../../Flash/inc/flash.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <title>PHP File Upload</title>
</head>
<body>
    <?php flash('upload'); ?>
    <main>
    <form enctype="multipart/form-data" action="upload.php" method="post">
        <div>
            <label for="file">Select a file:</label>
            <input type="file" id="file" name="files[]" multiple require/>
        </div>
        <div>
            <button type="submit">Upload</button>
        </div>
    </form>
</main>
</body>
</html>